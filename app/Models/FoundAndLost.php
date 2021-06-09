<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoundAndLost extends Model
{
    use HasFactory;

    public $table = 'foundandlost';

    public $fillable = [
        'status',
        'photo',
        'description',
        'where',
        'datecreated'
    ];

    protected $casts = [
        'status' => 'string',
        'photo' => 'string',
        'description' => 'string',
        'where' => 'string'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'datecreated'
    ];
}
