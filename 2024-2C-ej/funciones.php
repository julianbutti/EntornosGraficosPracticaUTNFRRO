<?php

function consultaSQL( $consulta ){
    $link = mysqli_connect("localhost","root","root","veterinaria_db");
    $resultado = mysqli_query($link, $consulta);
    mysqli_close($link);
    return $resultado;
}