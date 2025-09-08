<?php

session_start();

function saludo($string){
    return "Hola, " . $string;
}

//echo saludo("Juan");

function consultaSQL($consulta_sql){
    $conexion = mysqli_connect("localhost", "usuario", "contraseña", "basededatos");
    //mysqli_select_db($conexion, "basededatos");

    $resultado = mysqli_query($conexion, $consulta_sql);
    mysqli_close($conexion);
    return $resultado;
}


function insertarRegistroNuevo($email, $password){
    $sql = "INSERT INTO usuarios (email, password) VALUES ('$email', '$password')";
    return consultaSQL($sql);
}