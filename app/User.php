<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use App\Role;
use App\Cour;




// class User extends Model
// {
//     public $timestamps = false;
// }


class User extends Authenticatable
{
    public $timestamps = false;

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    // FONCTIONS ROLES
    public function hasAnyRole($roles) {
        if (is_array($roles)) {
            foreach ($roles as $role) {
                if ($this->hasRole($roles)) {
                    return true;
                }
            }
        } else {
            if ($this->hasRole($roles)) {
                return true;
            }
        }
        return false;
    }

    public function hasRole($role) {
        if ($this->role()->where('nom', $role)->first()) {
            return true;
        }
        return false;
    }

    public function role()
    {
        return $this->belongsTo('App\Role');
    }

    public function cours()
    {
        return $this->hasMany('App\Cour');
    }

    public function sessionsUser()
    {
        return $this->belongsToMany('App\Cour')->withPivot('id', 'date', 'start_time', 'end_time');
        // return $this->belongsToMany(Cour::class, 'cour_user');
    }
}
