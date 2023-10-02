<?php

namespace Core;

use src\Config\Config;
use PDO;

class Model
{
    public $db = null;

    public function __construct()
    {
        try {
            self::openDatabaseConnection();
        } catch (\PDOException $e) {
            exit('Database connection could not be established.');
        }
    }

    private function openDatabaseConnection()
    {
        $dsn = sprintf("mysql:host=%s:%s;dbname=%s;charset=%s", Config::DB_HOST, Config::DB_PORT, Config::DB_NAME, Config::DB_CHARSET);
        $options  = [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, 
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
        ];
        $this->db = new PDO($dsn, Config::DB_USER, Config::DB_PASS, $options);
    }

    public function getUsers(){
        try {
            $query = "SELECT * FROM users WHERE edad >= 18";
            $stmt = $this->db->query($query);
    
            return $stmt->fetchAll(); 
        }catch(Exception $err){
            echo $err->getMessage();
        }
    }
    public function updateProduct($productName){
        try{
            $sql = "UPDATE products SET nombre = :nuevoNombre WHERE id = 5";

            // Ejecutar la sentencia SQL
            $stmt = $this->db->prepare($sql);

            // Asignar valores a los parámetros
            $stmt->bindParam(':nuevoNombre', $productName, PDO::PARAM_STR);

            // Ejecutar la sentencia
            $stmt->execute();

            // Verificar si la actualización fue exitosa
            return $stmt->rowCount() > 0;
        }catch(Exception $err){
            echo $err->getMessage();
        }
    }

    public function getAllProducts() {
        try{
            $query = "SELECT * FROM products";
            $stmt = $this->db->query($query);
    
            return $stmt->fetchAll(); 
        }catch(Exception $err){
            echo $err->getMessage();
        }
    }
}