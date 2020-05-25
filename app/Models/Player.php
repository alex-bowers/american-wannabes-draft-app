<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'name'            => 'string',
        'position'        => 'string',
        'team'            => 'int',
        'college'         => 'int',
        'owned_by'        => 'int',
        'rookie'          => 'bool',
        'free_agent'      => 'bool',
        'recently_traded' => 'bool',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'            => 'string',
        'position'        => 'string',
        'team'            => 'int',
        'college'         => 'int',
        'owned_by'        => 'int',
        'rookie'          => 'bool',
        'free_agent'      => 'bool',
        'recently_traded' => 'bool',
    ];

    /**
     * The validation rules.
     *
     * @var string[]
     */
    public $rules = [
        'name'            => 'required|string',
        'position'        => 'required|string',
        'team'            => 'nullable|int',
        'college'         => 'required|int',
        'owned_by'        => 'nullable|int',
        'rookie'          => 'required|bool',
        'free_agent'      => 'required|bool',
        'recently_traded' => 'required|bool',
    ];

    /**
     * Get the nfl team associated with the player.
     */
    public function proTeam()
    {
        return $this->belongsTo(NFLTeam::class, 'team');
    }

    /**
     * Get the college team associated with the player.
     */
    public function collegeTeam()
    {
        return $this->belongsTo(CollegeTeam::class, 'college');
    }

    /**
     * Get the user associated with the player.
     */
    public function ownedBy()
    {
        return $this->belongsTo(User::class, 'owned_by');
    }

    /**
     * Scope rookie players.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeIsRookie($query)
    {
        return $query->where('rookie', '=', 1);
    }

    /**
     * Scope veteran players.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeIsVeteran($query)
    {
        return $query->where('rookie', '=', 0);
    }
}
