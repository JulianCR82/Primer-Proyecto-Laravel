<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    //nombre de la tabla
    protected $table = 'productos';
    //llave primaria
    protected $primaryKey = 'id';

    //definir los atributos de la tabla
    protected $fillable = [
        'nombre',
        'precio',
        'stock',
    ];

}
