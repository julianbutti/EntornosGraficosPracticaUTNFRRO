<?php

include_once "funciones.php";


$results = consultaSql("DELETE FROM peliculas WHERE id_pelicula > 10");

//include_once "db2.php";
header('Location: db2.php');
exit();