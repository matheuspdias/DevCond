<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AreaDisabledDay extends Model
{
    use HasFactory;

    public $table = 'areadisableddays';

    public $fillable = [
        'id_area',
        'day'
    ];

    protected $casts = [
        'id_area' => 'integer',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'day'
    ];
}
