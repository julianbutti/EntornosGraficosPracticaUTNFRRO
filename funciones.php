<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'password');
define('DB_NAME', 'prueba');

function consultaSql($query){
    $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS,DB_NAME) or die("Error al conectarse");
    //mysqli_select_db($connection,DB_NAME);
    $resultados = mysqli_query($connection,$query);
    mysqli_close($connection);
    return $resultados;
}

function mostrarFechaHoy(){
    return date('d/m/Y');
}