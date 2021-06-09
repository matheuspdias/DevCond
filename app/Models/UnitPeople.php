<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnitPeople extends Model
{
    use HasFactory;

    public $table = 'unitpeoples';

    protected $hidden = [
        'id_unit',
    ];

    public $fillable = [
        'id_unit',
        'name',
        'birthdate',
    ];

    protected $casts = [
        'id_unit' => 'integer',
        'name' => 'string'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'birthdate'
    ];
}
