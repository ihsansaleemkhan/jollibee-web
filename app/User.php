<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'full_name', 'email', 'mobile', 'status', 'password', 'default_address', 'reward_point', 'card_token'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function addNew($user)
    {
        $authUser=User::where('google_id', $user->id)->first();
        if($authUser)
        {
            return $authUser;
        }
        return User::create([
            'full_name' => $user->name,
            'google_id' => $user->id,
            'email' => $user->email,
            'avatar' =>$user->avatar,
        ]);
    }
}
