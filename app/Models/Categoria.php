<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $table = 'categorias';
    //llave primaria
    protected $primaryKey = 'id';

    //definir los atributos de la tabla
    protected $fillable = [
        'nombre',
        'descripcion',
    ];




}
