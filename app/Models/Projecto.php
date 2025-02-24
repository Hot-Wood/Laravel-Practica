<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projecto extends Model
{
    use HasFactory;

    protected $fillable = [
        'NombreProjecto',
        'fuenteFondos',
        'MontoPlanificado',
        'MontoPatrocinado',
        'MontoFondosPropios',
    ];
}
