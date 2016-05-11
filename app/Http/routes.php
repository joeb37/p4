<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

# ------------------------------------
# Authentication
# ------------------------------------
Route::get('/login', 'Auth\AuthController@getLogin');
Route::post('/login', 'Auth\AuthController@postLogin');

Route::get('/register', 'Auth\AuthController@getRegister');
Route::post('/register', 'Auth\AuthController@postRegister');

Route::get('/logout', 'Auth\AuthController@logout');

# Login status test code
Route::get('/show-login-status', function() {

    # You may access the authenticated user via the Auth facade
    $user = Auth::user();

    if($user) {
        echo 'You are logged in.';
        dump($user->toArray());
    } else {
        echo 'You are not logged in.';
    }

    return;

});

# ------------------------------------
# Home Page
# ------------------------------------
Route::get('/', function () {
    $states_for_dropdown = \p4\Location::state_list();
    $payments_for_dropdown = \p4\Location::payment_type_list();
    $business_types_for_dropdown = \p4\Location::business_type_list();

    return view('welcome')
        ->with('states_for_dropdown', $states_for_dropdown)
        ->with('payments_for_dropdown', $payments_for_dropdown)
        ->with('business_types_for_dropdown', $business_types_for_dropdown);
});

# ------------------------------------
# Locations
# ------------------------------------
Route::get('/location/query={query?}', 'LocationController@getQuery');
Route::get('/location/show/{id?}', 'LocationController@getShow');

Route::group(['middleware' => 'auth'], function() {
    Route::get('/location/create', 'LocationController@getCreate');
    Route::post('/location/create', 'LocationController@postCreate');
    Route::get('/location/edit/{id?}', 'LocationController@getEdit');
    Route::post('/location/edit', 'LocationController@postEdit');
    Route::get('/location/confirm-delete/{id?}', 'LocationController@getConfirmDelete');
    Route::get('/location/delete/{id?}', 'LocationController@getDelete');
});

# ------------------------------------
# Machines (master table)
# ------------------------------------
Route::get('/machine/show/{id?}', 'MachineController@getShow');

# ------------------------------------
# Games (machines at a location)
# ------------------------------------
Route::group(['middleware' => 'auth'], function() {
    Route::get('/location/{id?}/game/lineup', 'GameController@getLineup');
    Route::post('/location/{id?}/game/lineup', 'GameController@postLineup');
    Route::get('/location/{loc_id?}/game/edit/{game_id?}', 'GameController@getEdit');
    Route::post('/location/{id?}/game/edit', 'GameController@postEdit');
    Route::get('/location/{loc_id?}/game/confirm-delete/{game_id?}', 'GameController@getConfirmDelete');
    Route::get('/location/{loc_id?}/game/delete/{game_id?}', 'GameController@getDelete');
});

# ------------------------------------
# Misc debug routes
# ------------------------------------
# Restrict certain routes to only be viewable in the local environments
if(App::environment('local')) {
    Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
    Route::get('/drop', function() {
        DB::statement('DROP database p4');
        DB::statement('CREATE database p4');
        return 'Dropped p4; created p4.';
    });
}
