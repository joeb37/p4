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

        // Data for drop down lists.
        $business_type_list = \p4\Location::business_type_list();
        $payment_type_list = \p4\Location::payment_type_list();

        // Build a query
        //
        // All search elements are optional, and providing no parameters should
        // return all locations.
        //
        // Count up an report the number of games at each location.

        $locationQuery = DB::table('locations')
            ->leftJoin('games','games.location_id','=','locations.id')
            ->leftJoin('machines', 'games.machine_id', '=', 'machines.id')
            ->select(DB::raw('locations.*, count(games.id) as game_total'));
        if ($request->has('name')) {
            $locationQuery->where('locations.name', 'like', '%'.$request->input('name').'%');
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
        if ($request->has('game_name')) {
            $locationQuery->where('machines.name', 'like', '%'.$request->input('game_name').'%');
        }

        $locationQuery->groupBy('locations.name');

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
    public function getShow($id = null) {

        // Data for drop down lists.
        $payment_type_list = \p4\Location::payment_type_list();
        $business_type_list = \p4\Location::business_type_list();

        // Make sure we can find the location that the user wants to see
        $location = \p4\Location::find($id);

        if (is_null($location)) {

            \Session::flash('message', 'Location not found');
            return redirect('/');
        }

        // Get the info for all games at this location.
        $games = DB::table('games')->select('games.id', 'games.machine_id',
                                            'machines.name', 'machines.manufacturer', 'machines.year')
                                   ->where('location_id', '=', $id)
                                   ->join('machines', 'games.machine_id','=','machines.id')
                                   ->get();

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

        // Data for drop down lists.
        $state_list = \p4\Location::state_list();
        $payment_type_list = \p4\Location::payment_type_list();
        $business_type_list = \p4\Location::business_type_list();

        // Present the create form
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

        // Create the location.
        $location = \p4\Location::create($data);

        \Session::flash('message', $request->name.' was added');

        return redirect('/location/show/'.$location->id);
    }

    /**
     * Responds to requests to GET /location/edit/{id?}
     */
    public function getEdit($id = null) {

        // Make sure we can find the location that the user wants to edit
        $location = \p4\Location::find($id);

        if (is_null($location)) {
            \Session::flash('message', 'Location not found');
            return redirect('/');
        }

        // Data for dropdown lists
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

        return redirect('/location/show/'.$location->id);
    }

    public function getConfirmDelete($id = null) {

        $location = \p4\Location::find($id);

        // Make sure we can find the location that the user wants to delete
        if (is_null($location)) {
            \Session::flash('message', 'Location not found');
            return redirect('/');
        }

        return view('locations.delete')->with('location', $location);

    }

    /**
     * Responds to requests to GET /location/delete/{id?}
     */
    public function getDelete($id = null) {

        $location = \p4\Location::find($id);

        // Make sure we can find the location that the user wants to delete
        if (is_null($location)) {
            \Session::flash('message', 'Location not found');
            return redirect('/');
        }

        // Remove Games at this Location
        $deletedGames = \p4\Game::where('location_id', $location->id)->delete();

        // Remove this location
        $location->delete();

        \Session::flash('message', $location->name.' has been deleted');

        return redirect('/');
    }

}
