<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habitacio extends Model
{
    use HasFactory;
    public $table = "habitacions";
    protected $primaryKey = 'codiHab';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'codiHab',
        'capacitat',
        'mida',
        'pensio',
        'vistes',
        'llits',
        'n_llits',
        'terrassa',
        'calefaccio',
        'aire_acondicionat',
        'nens',
        'animals'
    ];
}