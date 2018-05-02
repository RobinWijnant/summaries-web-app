<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    public function users()
    {
        return $this->belongsToMany('App\User');
    }

    public function educations()
    {
        return $this->hasMany('App\Education');
    }
}
