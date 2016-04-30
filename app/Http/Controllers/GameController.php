<?php

namespace p4\Http\Controllers;

use p4\Http\Controllers\Controller;

class GameController extends Controller {

    /**
     * Responds to requests to GET /location/{id?}/game/create
     */
    public function getCreate($id) {
        return 'Creating a new game at location '.$id;
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
