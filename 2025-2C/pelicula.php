<?php

session_start();

include_once "funciones.php";

if(empty($_GET["id"])) {
    header("Location: perfil.php");
    exit();
}

$sql  = "select * from peliculas where id = '".$_GET["id"]."' LIMIT 1;";
$peliculaObj = consultaSQL($sql);
if(!empty($peliculaObj)){
    $arregloPelicula = mysqli_fetch_assoc($peliculaObj);
    ?>
    <h1><?= $arregloPelicula["titulo"] ?></h1>
    <p><?= $arregloPelicula["sinopsis"] ?></p>
    <p>Género: <?= $arregloPelicula["genero"] ?></p>
    <?php
}else{
    echo "<p>Película no encontrada.</p>";
}
?>

<br />
<a href="perfil.php">Volver al perfil</a>