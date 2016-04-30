<?php

namespace p4\Http\Controllers;

use p4\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LocationController extends Controller {

    /**
    * Responds to requests to GET /location/query={query?}
    */
    public function getQuery(Request $request) {
        return 'Query parameters are => City:'.$request->input('city').', State:'.$request->input('state');
    }

    /**
     * Responds to requests to GET /location/show/{id?}
     */
    public function getShow($id) {
        return 'Showing details for location '.$id;;
    }

    /**
     * Responds to requests to GET /location/create
     */
    public function getCreate() {

        $states_for_dropdown = \p4\Location::states_for_dropdown();
        $payments_for_dropdown = \p4\Location::payments_for_dropdown();
        $business_types_for_dropdown = \p4\Location::business_types_for_dropdown();

        return view('locations.create')
            ->with('states_for_dropdown', $states_for_dropdown)
            ->with('payments_for_dropdown', $payments_for_dropdown)
            ->with('business_types_for_dropdown', $business_types_for_dropdown);
    }

    /**
     * Responds to requests to POST /location/create
     */
    public function postCreate(Request $request) {

        $this->validate($request,[
            'name' => 'required',
            'street_address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip' => 'required'
        ]);

        # Mass Assignment
        $data = $request->only('name', 'street_address', 'city', 'state', 'zip', 'business_type', 'payment_type');
        \p4\Location::create($data);

        \Session::flash('message', $request->name.' was added');

        return redirect('/');
    }

    /**
     * Responds to requests to GET /location/edit/{id?}
     */
    public function getEdit($id) {
        return 'Editing details about location '.$id;
    }

    /**
     * Responds to requests to POST /location/edit
     */
    public function postEdit(Request $request) {
        return 'Process location edit form';
    }

    /**
     * Responds to requests to GET /location/delete/{id?}
     */
    public function getDelete($id) {
        return 'Deleting location number '.$id;
    }

}
