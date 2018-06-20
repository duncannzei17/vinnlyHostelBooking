<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class regulation extends Model
{
    public function room()
    {
        return $this->belongsTo('App\room');
    }
}
