<?php

namespace p4;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    public function machine() {
        return $this->belongsTo('\App\Machine');
    }

    public function location() {
        return $this->belongsTo('\App\Location');
    }

}
