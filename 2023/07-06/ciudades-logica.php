<?php
session_start();
if(!isset($_SESSION['mensaje']))
    $_SESSION['mensaje'] = '';

include_once "../31-05/funciones.php";

if(!empty($_POST) AND !empty($_POST['accion']) AND $_POST['accion'] == "nuevo"){
    // Envié el nombre de una nueva ciudad
    $sql_insertar = "INSERT INTO ciudades (id, nombre) VALUES (NULL, '".$_POST['nombre']."')"; //INSERT INTO ciudades (id, nombre) VALUES (NULL, 'Rosario')
    $resultado = consultaSql($sql_insertar);
    if($resultado)
        $_SESSION['mensaje'] = "OK - Nueva ciudad";
    else
        $_SESSION['mensaje'] = "Error - Algo ha fallado";
}

if(!empty($_GET) AND !empty($_GET['eliminarid'])){
    $sql_delete = "DELETE FROM ciudades WHERE id = ".$_GET['eliminarid']; //DELETE FROM ciudades WHERE id = 23
    $resultado = consultaSql($sql_delete);
    if($resultado)
        $_SESSION['mensaje'] = "OK - Ciudad eliminada";
    else
        $_SESSION['mensaje'] = "Error - Algo ha fallado - No se pudo eliminar";
    
}

if(!empty($_GET['editarid'])){
    $elemento_a_editar = consultaSql("SELECT * FROM ciudades WHERE id = " . $_GET['editarid']);
    $ciudad_a_editar = mysqli_fetch_assoc($elemento_a_editar);
    //$ciudad_a_editar["nombre"]
}

if(!empty($_POST) AND !empty($_POST['accion']) AND $_POST['accion'] == "editar"){
    $sql_update = "UPDATE ciudades SET nombre = '".$_POST['nombre']."' WHERE id = ".$_POST['id']; //UPDATE ciudades SET nombre = 'RosarioX', pais='Argentina' WHERE id = 23
    $resultado = consultaSql($sql_update);
    if($resultado)
        $_SESSION['mensaje'] = "OK - ciudad editada";
    else
        $_SESSION['mensaje'] = "Error - Algo ha fallado";
}

$listado = consultaSql("SELECT * FROM ciudades ORDER BY nombre DESC");