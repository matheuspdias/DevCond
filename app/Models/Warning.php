<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warning extends Model
{
    use HasFactory;

    public $fillable = [
        'id_unit',
        'title',
        'status',
        'datecreated',
        'photos'
    ];

    protected $casts = [
        'id_unit' => 'integer',
        'title' => 'string',
        'status' => 'string',
        'photos' => 'text'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'datecreated'
    ];
}
