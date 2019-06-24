<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Cour;

class Session extends Model
{
    public $timestamps = false;

    public function cour()
    {
        return $this->belongsTo('App\Cour');
    }
}
