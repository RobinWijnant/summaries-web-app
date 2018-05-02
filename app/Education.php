<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    public function school()
    {
        return $this->belongsTo('App\School');
    }

    public function courses()
    {
        return $this->hasMany('App\Course');
    }
}
