<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;

    protected $primaryKey = ['dni','codiHab'];
    public $incrementing = false;
    protected $fillable = [
        'dni',
        'codiHab',
        'data_entrada',
        'data_sortida',
        'pensio',
        'preu_dia',
        'asseguranca'
    ];
}