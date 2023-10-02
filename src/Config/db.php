<?php
    $host="localhost";
    $database="prueba1";
    $user="root";
    $password="";

    try{
        $conection= new PDO("mysql:host=$host;dbname=$database", $user,$password);
    }catch(Exception $err){
        echo $err->getMessage();
    }

?>