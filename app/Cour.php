<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Session;


class Cour extends Model
{
    public $timestamps = false;

    public function prof()
    {
        return $this->belongsTo('App\User');
    }

    // public function sessions()
    // {
    //     return $this->hasMany('App\Session');
    // }

    public function sessionsCour()
    {
        return $this->belongsToMany('App\User')->withPivot('id', 'date', 'start_time', 'end_time');
        // return $this->belongsToMany(User::class, 'cour_user');
    }

}

