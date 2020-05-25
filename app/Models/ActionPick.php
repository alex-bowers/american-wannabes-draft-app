<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActionPick extends Model
{
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'action_id' => 'int',
        'user_id'   => 'int',
        'pick_id'   => 'int',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'action_id',
        'user_id',
        'pick_id',
    ];

    /**
     * The validation rules.
     *
     * @var string[]
     */
    public $rules = [
        'action_id' => 'required|int',
        'user_id'   => 'required|int',
        'pick_id'   => 'required|int',
    ];
}
