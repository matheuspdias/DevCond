<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;

    public $fillable = [
        'name',
        'id_owner',
    ];

    protected $casts = [
        'name' => 'string',
        'id_owner' => 'integer'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];
}
