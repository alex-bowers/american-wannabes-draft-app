<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'name'              => 'string',
        'fantasy_team_name' => 'string',
        'email'             => 'string',
        'password'          => 'string',
        'remember_token'    => 'string',
        'active'            => 'bool',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'fantasy_team_name',
        'email',
        'password',
        'remember_token',
        'active',
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
     * The validation rules.
     *
     * @var string[]
     */
    public $rules = [
        'name'              => 'required|string',
        'fantasy_team_name' => 'nullable|string',
        'email'             => 'required|string',
        'password'          => 'required|string',
        'remember_token'    => 'nullable|string',
        'active'            => 'required|bool',
    ];

    /**
     * Get the players associated with the team.
     */
    public function players()
    {
        return $this->hasMany(Player::class, 'owned_by');
    }
}
