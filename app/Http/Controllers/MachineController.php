<?php

namespace p4\Http\Controllers;

use p4\Http\Controllers\Controller;

class MachineController extends Controller {

    /**
    * Responds to requests to GET /machine
    */
    public function getShow($id) {

        $machine = \p4\Machine::find($id);

        return view('machines.show')->with('machine', $machine);
    }
}
