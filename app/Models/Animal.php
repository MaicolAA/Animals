<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    public $timestamps = false;

    

    protected $primaryKey = 'idanimal';

    protected $table = 'animals';

    protected $fillable = [
        'idanimal',
        'nombreAnimal',
        'descAnimal',
        'fechaNacimiento',
        'idTipoAnimal'
    ];
}
