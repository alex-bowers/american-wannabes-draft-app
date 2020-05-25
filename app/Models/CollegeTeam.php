<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CollegeTeam extends Model
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
        'sport'        => 'string',
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
        'sport',
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
        'sport'        => 'required|string',
    ];
}
