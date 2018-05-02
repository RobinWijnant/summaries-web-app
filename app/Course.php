<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function summaries()
    {
        return $this->hasMany('App\Summary');
    }

    public function education()
    {
        return $this->belongsTo('App\Education');
    }

    public function tags()
    {
        return $this->hasMany('App\Tag');
    }
}
