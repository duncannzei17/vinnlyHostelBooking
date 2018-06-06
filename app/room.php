<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class room extends Model
{
    public function Feature()
    {
        return $this->hasMany('App\Feature');
    }
   
}
