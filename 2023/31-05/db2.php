<?php

include_once "funciones.php";

$sql = "SELECT * FROM peliculas";

$results = consultaSql($sql);

if($results AND !empty($results)){
    while($pelicula = mysqli_fetch_array($results)){
        if(!empty($pelicula['nombre'])){
            echo "El id de la pelicula es: ";
            echo $pelicula['id'];
            echo " y se llama: " . $pelicula['nombre'];
            echo "<br />";
        }
    }
}

//El id de la pelicula es: 1 y se llama: El silencio de los Inocentes
//El id de la pelicula es: 2 y se llama: La mascara