<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WallLike extends Model
{
    use HasFactory;

    public $table = 'walllikes';

    public $fillable = [
        'id_wall',
        'id_user'
    ];

    protected $casts = [
        'id_wall' => 'integer',
        'id_user' => 'integer'
    ];

    protected $dates = [
        'created_at',
        'updated_at'
    ];
}
