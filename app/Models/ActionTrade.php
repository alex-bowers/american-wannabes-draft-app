<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActionTrade extends Model
{
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'action_id'                 => 'int',
        'user_one'                  => 'int',
        'user_two'                  => 'int',
        'user_one_receives_picks'   => 'json',
        'user_one_receives_players' => 'json',
        'user_two_receives_picks'   => 'json',
        'user_two_receives_players' => 'json',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'action_id',
        'user_one',
        'user_two',
        'user_one_receives_picks',
        'user_one_receives_players',
        'user_two_receives_picks',
        'user_two_receives_players',
    ];

    /**
     * The validation rules.
     *
     * @var string[]
     */
    public $rules = [
        'action_id'                 => 'required|int',
        'user_one'                  => 'required|int',
        'user_two'                  => 'required|int',
        'user_one_receives_picks'   => 'nullable|json',
        'user_one_receives_players' => 'nullable|json',
        'user_two_receives_picks'   => 'nullable|json',
        'user_two_receives_players' => 'nullable|json',
    ];

    /**
     * Get the pick associated with the trade.
     */
    public function action()
    {
        return $this->belongsTo(Action::class, 'action_type', 'action_id');
    }

    /**
     * Get the user associated with the trade.
     */
    public function userOne()
    {
        return $this->hasOne(Player::class, 'user_one');
    }

    /**
     * Get the user associated with the trade.
     */
    public function userTwo()
    {
        return $this->hasOne(Player::class, 'user_two');
    }
}
