<?php

namespace p4\Http\Controllers;

use p4\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;

class GameController extends Controller {

    /**
     * Responds to requests to GET /location/{id?}/game/lineup
     */
    public function getLineup($id = null) {

        // Make sure we can find the location that the user wants to see
        $location = \p4\Location::find($id);

        if (is_null($location)) {
            \Session::flash('message', 'Location not found');
            return redirect('/');
        }

        // Get an order list of all machines that are available to be added to a location
        $machines = DB::table('machines')->orderBy('name')->get();

        // Get all list of all machines already at this location.
        $gameArray = \p4\Game::machines_at_location($id);

        return view('games.lineup')
            ->with('location', $location)
            ->with('machines', $machines)
            ->with('games_at_this_location', $gameArray);
    }

    /**
     * Responds to requests to POST /location/{id?}/game/lineup
     */
    public function postLineup($loc_id, Request $request) {

        $newMachines =  $request->input('machines') == null ? [] : $request->input('machines');
        $currentMachines = \p4\Game::machines_at_location($loc_id);

        // Process machines that have been added
        foreach ($newMachines as $machineId) {
            if (!in_array($machineId, $currentMachines)) {
                \p4\Game::addGameToLocation($loc_id, $machineId);
            }
        }

        // Process games that have been deleted
        foreach ($currentMachines as $machineId) {
            if (!in_array($machineId, $newMachines)) {
                \p4\Game::deleteGameFromLocation($loc_id, $machineId);
            }
        }

        return redirect('/location/show/'.$loc_id);
    }

    /**
     * Responds to requests to GET /location/{loc_id?}/game/edit/{game_id?}
     */
    public function getEdit($loc_id = null, $game_id = null) {

        // Make sure we can find the location that the user wants to see
        $location = \p4\Location::find($loc_id);
        if (is_null($location)) {
            \Session::flash('message', 'Location not found');
            return redirect('/');
        }

        // Make sure we can find the game that the user wants to see
        $game = \p4\Game::find($game_id);
        if (is_null($game)) {
            \Session::flash('message', 'Game not found');
            return redirect('/');
        }

        // Get the generic machine data for this game (name)
        $machine = DB::table('machines')->where('id','=',$game->machine_id)->first();

        return view('games.edit')
            ->with('location', $location)
            ->with('machine', $machine)
            ->with('game', $game);
    }

    /**
     * Responds to requests to POST /location/{id?}/game/edit
     */
    public function postEdit($id, Request $request) {

        $game = \p4\Game::find($request->id);

        $game->pricing = $request->pricing;
        $game->condition = $request->condition;

        $game->save();

        \Session::flash('message', $request->name.' was updated');

        return redirect('/location/show/'.$id);
    }

    public function getConfirmDelete($loc_id, $game_id = null) {

        $game = \p4\Game::with('machine')->with('location')->find($game_id);

        // Make sure we can find the game to be deleted.
        if (is_null($game)) {
            \Session::flash('message', 'Game not found');
            return redirect('/');
        }

        return view('games.delete')->with('game', $game);
    }

    /**
     * Responds to requests to GET /location/{loc_id?}/game/delete/{game_id?}
     */
    public function getDelete($loc_id, $game_id = null) {

        $game = \p4\Game::with('machine')->with('location')->find($game_id);

        // Make sure we can find the game to be deleted.
        if (is_null($game)) {
            \Session::flash('message', 'Game not found');
            return redirect('/');
        }

        $game->delete();

        \Session::flash('message', $game->machine->name.' deleted from '.$game->location->name);
        return redirect('/location/show/'.$loc_id);
    }

}
