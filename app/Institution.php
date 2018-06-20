<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    public function room()
    {
        return $this->belongsTo('App\room');
    }
}
