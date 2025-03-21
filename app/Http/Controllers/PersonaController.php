<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;

class PersonaController extends Controller
{
    public function index()
    {
        $personas = [
            new Persona("Julian", 19, "Estudiante"),
            new Persona("Cristian", 35, "Docente"),
            new Persona("Felipe", 40, "Coordinador"),
            new Persona("Alejandro", 30, "Docente")
        ];

        return view('personas', compact('personas'));
    }
}
