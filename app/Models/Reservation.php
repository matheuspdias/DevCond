<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    public $fillable = [
        'id_unit',
        'id_area',
        'reservation_date'
    ];

    protected $casts = [
        'id_unit' => 'integer',
        'id_area' => 'integer',
        'reservation_date' => 'datetime'
    ];

    protected $dates = [
        'created_at',
        'updated_at'
    ];
}
