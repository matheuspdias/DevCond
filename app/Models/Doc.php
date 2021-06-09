<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doc extends Model
{
    use HasFactory;

    public $fillable = [
        'title',
        'fileurl'
    ];

    protected $casts = [
        'title' => 'string',
        'fileurl' => 'string'
    ];

    protected $dates = [
        'created_at',
        'updated_at'
    ];
}
