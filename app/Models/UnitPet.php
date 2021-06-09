<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnitPet extends Model
{
    use HasFactory;

    public $table = 'unitpets';

    protected $hidden = [
        'id_unit',
    ];

    public $fillable = [
        'id_unit',
        'name',
        'race'
    ];

    protected $casts = [
        'id_unit' => 'integer',
        'name' => 'string',
        'race' => 'string'
    ];

    protected $dates = [
        'created_at',
        'updated_at'
    ];
}
