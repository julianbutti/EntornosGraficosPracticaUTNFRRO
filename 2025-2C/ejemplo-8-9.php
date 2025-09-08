<?php
/*
setcookie("nombre", "valor", time() + 3600);

echo "Valor de la cookie : " . $_COOKIE["nombre"];

setcookie("nombre", "valor2", time() + 3600);

setcookie("nombre", "", time() - 3600);
*/
session_start();

$_SESSION["usuario_actual"] = "Juan";
$_SESSION["activo"] = true;

$_SESSION["rol"] = "admin";

$_SESSION["preferencias"]["color"] = "rojo";
$_SESSION["preferencias"]["edad"] = 233;


?>