<?php

namespace App\Models;

class Persona {
    public $nombre;
    public $edad;
    public $rol;

    public function __construct($nombre, $edad, $rol) {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->rol = $rol;
    }
}
