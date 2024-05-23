<?php

session_start();
/*
if($_SESSION['usuario_valido'] != true){
    header('Location: login.php');
    exit();
}
*/

if(!$_SESSION['usuario_valido']){
    $_SESSION['MENSAJE'] = "Tu usuario no puede ver ese contenido...";
    header('Location: login.php');
    exit();
}


?>

CONTENIDO PRIVADO