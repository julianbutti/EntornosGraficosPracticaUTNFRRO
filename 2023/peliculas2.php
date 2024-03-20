<?php

include_once "funciones.php";

if(!empty($_POST) AND !empty($_POST['nombre'])){
    //Viene un registro desde el formulario
    $nombre = ucfirst(trim($_POST['nombre']));
    $critica = strtolower($_POST['critica']);
    $consultaInsert = "INSERT INTO peliculas (nombre, critica,anio) 
                        VALUES (
                            '$nombre',
                            '$critica',
                            '" . $_POST['anio'] . "'
                            )";
    consultaSql($consultaInsert);
}

$consulta = "SELECT * FROM peliculas ORDER BY nombre ASC";
$resultados = consultaSql($consulta);

if($resultados){
    // Procesar
    while($fila = mysqli_fetch_array($resultados)){
        //print_r($fila);
        echo "Pelicula: ";
        echo $fila['nombre'];
        echo " - Crítica: ";
        echo $fila['critica'];
        echo "<br />";
    }
}else{
    echo "Error al realizar la consulta...";
}

?>
<hr />
<form method="POST" action="">
    Nombre: <input type="text" name="nombre" /><br />
    Critica: <input type="text" name="critica" /><br />
    Año: <input type="text" name="anio" /><br />
    <input type="submit" value="Guardar" />
</form>