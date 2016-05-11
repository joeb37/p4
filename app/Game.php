<?php

namespace p4;

use Illuminate\Database\Eloquent\Model;
use DB;
use Carbon;

class Game extends Model
{
    public function machine() {
        return $this->belongsTo('\p4\Machine');
    }

    public function location() {
        return $this->belongsTo('\p4\Location');
    }

    public static function machines_at_location($loc_id) {

        $gameArray = [];

        $games = DB::table('games')->where('location_id', '=', $loc_id)->join('machines', 'games.machine_id','=','machines.id')->get();
        foreach ($games as $game) {
            array_push($gameArray, $game->machine_id);
        }

        return $gameArray;
    }

    public static function addGameToLocation($loc_id, $machine_id) {

        $game = new Game;

        $game->created_at  = Carbon\Carbon::now()->toDateTimeString();
        $game->updated_at  = Carbon\Carbon::now()->toDateTimeString();
        $game->location_id  = $loc_id;
        $game->machine_id  = $machine_id;
        $game->condition  = '';
        $game->pricing  = '';

        $game->save();
    }

    public static function deleteGameFromLocation($loc_id, $machine_id) {

        Game::where('location_id','=',$loc_id)
            ->where('machine_id','=',$machine_id)
            ->delete();
    }

}
