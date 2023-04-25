<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'nom_complet',
        'email',
        'password',
        'tipus',
        'darrera_hora_entrada',
        'darrera_hora_sortida',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
    ];
}
