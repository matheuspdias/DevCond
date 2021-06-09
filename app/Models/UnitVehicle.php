<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnitVehicle extends Model
{
    use HasFactory;

    public $table = 'unitvehicles';

    protected $hidden = [
        'id_unit',
    ];

    public $fillable = [
        'id_unit',
        'title',
        'color',
        'plate'
    ];

    protected $casts = [
        'id_unit' => 'integer',
        'title' => 'string',
        'color' => 'string',
        'plate' => 'string'
    ];

    protected $dates = [
        'created_at',
        'updated_at'
    ];
}
