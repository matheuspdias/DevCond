<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Billet extends Model
{
    use HasFactory;

    public $fillable = [
        'id_unit',
        'title',
        'fileurl'
    ];

    protected $casts = [
        'id_unit' => 'integer',
        'title' => 'string',
        'fileurl' => 'string'
    ];

    protected $dates = [
        'created_at',
        'updated_at'
    ];
}
