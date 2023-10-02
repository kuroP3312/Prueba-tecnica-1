<?php

namespace src\Controllers;

use Core\Model;
use Core\View;
require_once 'CocheController.php';

class HomeController
{
    private $modelo;
    private $coche;

    public function __construct() {
        // Crea instancias
        $this->modelo = new Model();
        $this->coche = new CocheController("Jeep","Patriot");
    }

    public function index(){
        $views = ['tests/index'];
        $args  = ['title' => 'Home'];
        View::render($views, $args);
    }

    public function helloWorld(){
        $views = ['tests/hello-world'];
        $args  = ['title' => 'Hola mundo'];
        View::render($views, $args);
    }

    public function add(){
        $views = ['tests/add'];
        $args  = ['title' => 'Sumar numeros'];
        View::render($views, $args);
    }

    public function plusNumber(){
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Obtener el nombre enviado por Ajax
            $number1 = $_POST["number1"];
            $number2 = $_POST["number2"];
            
            $result = $number1 + $number2;
            // Realizar alguna lógica en el servidor (puede ser almacenar en una base de datos, etc.)
        
            // Devolver una respuesta al cliente (en este caso, simplemente devolvemos el nombre)
            echo $result;
        }
    }

    public function cars(){
        $views = ['tests/cars'];
        $args  = ['title' => 'Coche', 'vehiculo' => json_encode($this->coche->mostrarInformacion())];
        View::render($views, $args);
    }

    public function diferenceVariables(){
        $views = ['tests/diference-variables'];
        $args  = ['title' => 'Home'];
        View::render($views, $args);
    }

    public function readTxt(){
        $views = ['tests/read-txt'];
        $args  = ['title' => 'Leer archivo txt'];
        View::render($views, $args);
    }

    public function showTxt(){
        $nombreArchivo = 'text/datos.txt';

        if (file_exists($nombreArchivo)) {
            // Leer el contenido del archivo
            $contenido = file_get_contents($nombreArchivo);

            // Mostrar el contenido en el navegador
            echo ($contenido);
        } else {
            echo "El archivo $nombreArchivo no existe.";
        }
    }

    public function selectRecords(){
        $views = ['tests/select-records'];
        $args  = ['title' => 'Busqueda de usuarios'];
        View::render($views, $args);
    }

    public function searchUsers(){
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $users = json_encode($this->modelo->getUsers());
            header('Content-Type: application/json');
            echo($users);
        }
    }

    public function travelArray(){
        $views = ['tests/travel-array'];
        $args  = ['title' => 'Buscador de pares'];
        View::render($views, $args);
    }

    public function mostrarEnterosPares() {
        if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["numeros"])) {
            $numeros = $_POST["numeros"];
            
            $pares = array_filter($numeros, function ($numero) {
                return $numero % 2 === 0;
            });

            echo json_encode(["pares" => array_values($pares)]);
        } else {
            echo json_encode(["error" => "Solicitud no válida"]);
        }
    }
    
    public function updateProduct(){
        $views = ['tests/update-product'];
        $args  = ['title' => 'Actualizar producto 5', 'products' => json_encode($this->modelo->getAllProducts())];
        View::render($views, $args);
    }

    public function execUpdateProduct(){
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            echo json_encode(["result" => $this->modelo->updateProduct($_POST["productName"])]);
        }
    }
}