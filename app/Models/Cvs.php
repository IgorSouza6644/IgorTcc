<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cvs extends Model
{
    use HasFactory;
    protected $fillable = ['nome', 'localidade', 'email', 'telefone', 'idade', 'formacao', 'experienciauser', 'interesseuser','salariouser' ];
}
