<?php 

function consultaSQL($sql_consulta){

    $conexion = mysqli_connect("mysql", "test", "test", "test");

    if (!$conexion) {
        die("Conexión fallida: " . mysqli_connect_error());
    }

    $resultados = mysqli_query($conexion, $sql_consulta);

    mysqli_close($conexion);

    return $resultados;
}