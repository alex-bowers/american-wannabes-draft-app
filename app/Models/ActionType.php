<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActionType extends Model
{
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    /**
     * The validation rules.
     *
     * @var string[]
     */
    public $rules = [
        'name' => 'required|string',
    ];

    /**
     * Get the pick associated with the type.
     */
    public function action()
    {
        return $this->belongsTo(Action::class, 'action_type');
    }
}
