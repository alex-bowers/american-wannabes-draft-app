<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Action extends Model
{
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'action_type'     => 'int',
        'action_pick_id'  => 'int',
        'action_trade_id' => 'int',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'action_type',
        'action_pick_id',
        'action_trade_id',
    ];

    /**
     * The validation rules.
     *
     * @var string[]
     */
    public $rules = [
        'action_type'     => 'required|int',
        'action_pick_id'  => 'nullable|int',
        'action_trade_id' => 'nullable|int',
    ];

    /**
     * Get the pick associated with the action.
     */
    public function type()
    {
        return $this->hasOne(Player::class, 'action_type');
    }

    /**
     * Get the pick associated with the action.
     */
    public function pick()
    {
        return $this->hasOne(Player::class, 'action_pick_id');
    }

    /**
     * Get the trade associated with the action.
     */
    public function trade()
    {
        return $this->hasOne(Player::class, 'action_trade_id');
    }
}
