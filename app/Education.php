<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $table = 'educations';

    public function school()
    {
        return $this->belongsTo('App\School');
    }

    public function courses()
    {
        return $this->hasMany('App\Course');
    }
}
