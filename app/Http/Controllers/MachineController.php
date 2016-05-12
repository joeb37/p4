<?php

namespace p4\Http\Controllers;

use p4\Http\Controllers\Controller;

class MachineController extends Controller {

    /**
    * Responds to requests to GET /machine
    */
    public function getShow($id = null) {

        $machine = \p4\Machine::find($id);

        // Make sure we can find this machine
        if (is_null($machine)) {
            \Session::flash('message', 'Machine not found');
            return redirect('/');
        }

        return view('machines.show')->with('machine', $machine);
    }
}
