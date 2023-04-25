<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $primaryKey = 'dni';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'dni',
        'nom_complet',
        'edat',
        'telefon',
        'adreca',
        'ciutat',
        'pais',
        'email',
        'tipus_targeta',
        'num_targeta'
    ];
}