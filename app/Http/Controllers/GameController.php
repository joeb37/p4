<?php

namespace p4\Http\Controllers;

use p4\Http\Controllers\Controller;
use DB;

class GameController extends Controller {

    /**
     * Responds to requests to GET /location/{id?}/game/create
     */
    public function getCreate($id) {

        // Make sure we can find the location that the user wants to see
        try
        {
            $location = \p4\Location::findOrFail($id);
        }
        catch (ModelNotFoundException $exception)
        {
            return redirect('/');
        }

        $machines = DB::table('machines')->orderBy('name')->get();

        $gameArray = [];

        $games = DB::table('games')->where('location_id', '=', $id)->join('machines', 'games.machine_id','=','machines.id')->get();
        foreach ($games as $game) {
            array_push($gameArray, $game->machine_id);
        }


        return view('games.lineup')
            ->with('location', $location)
            ->with('machines', $machines)
            ->with('games_at_this_location', $gameArray);
    }

    /**
     * Responds to requests to POST /location/{id?}/game/create
     */
    public function postCreate(Request $request) {

        /*
        $this->validate($request,[
            'name' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip' => 'required'
        ]);
        */

        return 'Process game creation form';
    }

    /**
     * Responds to requests to GET /location/{loc_id?}/game/edit/{game_id?}
     */
    public function getEdit($loc_id, $game_id) {
        return 'Display for to edit game'.$game_id.'at location'.$loc_id;
    }

    /**
     * Responds to requests to POST /location/{id?}/game/edit
     */
    public function postEdit(Request $request) {
        return 'Process game creation form';
    }

    /**
     * Responds to requests to GET /location/{loc_id?}/game/delete/{game_id?}
     */
    public function getDelete($loc_id, $game_id) {
        return 'Deleting game '.$game_id.'at location '.$loc_id;
    }

}
