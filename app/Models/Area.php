<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;

    public $fillable = [
        'allowed',
        'title',
        'cover',
        'days',
        'start_time',
        'end_time'
    ];

    protected $casts = [
        'allowed' => 'integer',
        'title' => 'string',
        'cover' => 'string',
        'days' => 'string',
        'start_time' => 'time',
        'end_time' => 'time'
    ];

    protected $dates = [
        'created_at',
        'updated_at'
    ];
}
