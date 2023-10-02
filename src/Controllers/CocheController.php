<?php

namespace src\Controllers;

use Core\Model;
use Core\View;

class CocheController 
{
    // Propiedades
    public $marca;
    public $modelo;
    
    // Constructor
    public function __construct($marca, $modelo) {
        $this->marca = $marca;
        $this->modelo = $modelo;
    }
    
    // Método para mostrar información del coche
    public function mostrarInformacion() {
        return [
            'marca' => $this->marca,
            'modelo' => $this->modelo,
        ];
    }
}