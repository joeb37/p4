<?php

namespace p4;

use Illuminate\Database\Eloquent\Model;

class Machine extends Model
{
    public function games() {
        return $this->hasMany('\App\Game');
    }

}
