<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pick extends Model
{
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'round'     => 'int',
        'number'    => 'int',
        'year'      => 'int',
        'owned_by'  => 'int',
        'player_id' => 'int',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'round',
        'number',
        'year',
        'owned_by',
        'player_id',
    ];

    /**
     * The validation rules.
     *
     * @var string[]
     */
    public $rules = [
        'round'     => 'required|int',
        'number'    => 'required|int',
        'year'      => 'required|int',
        'owned_by'  => 'required|int',
        'player_id' => 'nullable|int',
    ];

    /**
     * Get the user associated with the pick.
     */
    public function ownedBy()
    {
        return $this->belongsTo(User::class, 'owned_by');
    }

    /**
     * Get the player associated with the pick.
     */
    public function player()
    {
        return $this->hasOne(Player::class, 'id', 'player_id');
    }
}
