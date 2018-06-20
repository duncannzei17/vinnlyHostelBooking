<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class room extends Model
{
    protected $primaryKey = 'Room_id';
    public function Feature()
    {
        return $this->hasMany('App\Feature');
    }
    public function regulation()
    {
        return $this->hasMany('App\regulation');
    }
    public function Institution()
    {
        return $this->hasMany('App\Institution');
    }
}
