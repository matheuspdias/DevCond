<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wall extends Model
{
    use HasFactory;

    public $fillable = [
        'title',
        'body',
        'datecreated'
    ];

    protected $casts = [
        'title' => 'string',
        'body' => 'string'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'datecreated'
    ];
}
