<?php

namespace p4\Http\Controllers;

use p4\Http\Controllers\Controller;
use DB;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class LocationController extends Controller {

    /**
    * Responds to requests to GET /location/query={query?}
    */
    public function getQuery(Request $request) {

        $payment_type_list = \p4\Location::payment_type_list();
        $business_type_list = \p4\Location::business_type_list();

        // Build a query
        $locationQuery = DB::table('locations');
        if ($request->has('name')) {
            $locationQuery->where('name', 'like', '%'.$request->input('name').'%');
        }
        if ($request->has('city')) {
            $locationQuery->where('city', '=', $request->input('city'));
        }
        if ($request->has('state')) {
            $locationQuery->where('state', '=', $request->input('state'));
        }
        if ($request->has('zip')) {
            $locationQuery->where('zip', '=', $request->input('zip'));
        }
        if ($request->has('business_type')) {
            $locationQuery->where('business_type', '=', $request->input('business_type'));
        }
        if ($request->has('payment_type')) {
            $locationQuery->where('payment_type', '=', $request->input('payment_type'));
        }

        // Execute the query
        $locations = $locationQuery->get();

        // Output the results
        return view('locations.results')
            ->with('locations', $locations)
            ->with('payment_type_list', $payment_type_list)
            ->with('business_type_list', $business_type_list);
    }

    /**
     * Responds to requests to GET /location/show/{id?}
     */
    public function getShow($id) {

        // Make sure we can find the location that the user wants to see
        try
        {
            $location = \p4\Location::findOrFail($id);
        }
        catch (ModelNotFoundException $exception)
        {
            return redirect('/');
        }

        $payment_type_list = \p4\Location::payment_type_list();
        $business_type_list = \p4\Location::business_type_list();

        $games = DB::table('games')->where('location_id', '=', $id)->join('machines', 'games.machine_id','=','machines.id')->get();

        return view('locations.details')
            ->with('location', $location)
            ->with('games', $games)
            ->with('payment_type_list',$payment_type_list)
            ->with('business_type_list',$business_type_list);

    }

    /**
     * Responds to requests to GET /location/create
     */
    public function getCreate() {

        $state_list = \p4\Location::state_list();
        $payment_type_list = \p4\Location::payment_type_list();
        $business_type_list = \p4\Location::business_type_list();

        return view('locations.create')
            ->with('states_for_dropdown', $state_list)
            ->with('payments_for_dropdown', $payment_type_list)
            ->with('business_types_for_dropdown', $business_type_list);
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

        // Make sure we can find the location that the user wants to edit
        try
        {
            $location = \p4\Location::findOrFail($id);
        }
        catch (ModelNotFoundException $exception)
        {
            return redirect('/');
        }

        $state_list = \p4\Location::state_list();
        $payment_type_list = \p4\Location::payment_type_list();
        $business_type_list = \p4\Location::business_type_list();

        return view('locations.edit')
            ->with('location', $location)
            ->with('states_for_dropdown', $state_list)
            ->with('payments_for_dropdown', $payment_type_list)
            ->with('business_types_for_dropdown', $business_type_list);
    }

    /**
     * Responds to requests to POST /location/edit
     */
    public function postEdit(Request $request) {

        $this->validate($request,[
            'name' => 'required',
            'street_address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip' => 'required'
        ]);

        $location = \p4\Location::find($request->id);

        $location->name = $request->name;
        $location->street_address = $request->street_address;
        $location->city = $request->city;
        $location->state = $request->state;
        $location->zip = $request->zip;
        $location->business_type = $request->business_type;
        $location->payment_type = $request->payment_type;

        $location->save();

        \Session::flash('message', $request->name.' was updated');

        return redirect('/');
    }

    /**
     * Responds to requests to GET /location/delete/{id?}
     */
    public function getDelete($id) {

        // Make sure we can find the location that the user wants to delete
        try
        {
            $location = \p4\Location::findOrFail($id);
        }
        catch (ModelNotFoundException $exception)
        {
            return redirect('/');
        }

        if ($location->first()) {
            $name = $location->name;
            $location->delete();

            \Session::flash('message', $name.' was deleted');
        }

        return redirect('/');
    }

}
