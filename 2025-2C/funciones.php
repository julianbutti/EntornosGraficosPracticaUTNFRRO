<?php


function saludo($string){
    return "Hola, " . $string;
}

//echo saludo("Juan");


function insertarRegistroNuevo($email, $password){
    $sql = "INSERT INTO usuarios (email, password) VALUES ('$email', '$password')";
    return consultaSQL($sql);
}