<?php

namespace App;
use Plokko\LaravelFirebase\Traits\SyncWithFirebase;
use Illuminate\Notifications\Notifiable;
use Socialite;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    //use SyncsWithFirebase;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    function toFirebase(){
        $user = Socialite::driver('meetup')->user();
        return [
            'id'    => $user->id,
            'name'  => $user->name,
            
            //....
        ];
    }
    protected $fillable = [
        'name', 'email', 'password', 'member_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
