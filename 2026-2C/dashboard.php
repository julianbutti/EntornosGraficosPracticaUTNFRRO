<?php

session_start();

if($_SESSION["usuario_valido"] AND $_SESSION["rol"]=="admin"){
    //Puedo mostrar la info
}else{
    //No debería mostrar la info....
    header("Location: index.php");
    exit();
}


?>

<h1>DATOS PRIVADOS - ESTADISTICAS</h1>

<h2>Bienvenido: <?= $_SESSION["email"] ?></h2>

<a href="cerrar.php">Cerrar sesión....</a>