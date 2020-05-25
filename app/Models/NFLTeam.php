<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NFLTeam extends Model
{
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'team'         => 'string',
        'nickname'     => 'string',
        'abbreviation' => 'string',
        'logo'         => 'string',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'team',
        'nickname',
        'abbreviation',
        'logo',
    ];

    /**
     * The validation rules.
     *
     * @var string[]
     */
    public $rules = [
        'team'         => 'required|string',
        'nickname'     => 'required|string',
        'abbreviation' => 'required|string',
        'logo'         => 'required|string',
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'nfl_teams';

    /**
     * Get the players associated with the team.
     */
    public function players()
    {
        return $this->hasMany(Player::class, 'team');
    }
}
