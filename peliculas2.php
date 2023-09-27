<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'password');
define('DB_NAME', 'prueba');

function consultaSql($query){
    $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME) or die("Error al conectarse");
    $resultados = mysqli_query($connection,$query);
    mysqli_close($connection);
    return $resultados;
}

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