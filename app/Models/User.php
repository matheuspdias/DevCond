<?php

namespace App\Models;

use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements JWTSubject
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'cpf',
        'password',
    ];

    protected $hidden = [
        'password',
    ];

    protected $casts = [
        'name' => 'string',
        'email' => 'string',
        'cpf' => 'string'
        'password' => 'string'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }
}
