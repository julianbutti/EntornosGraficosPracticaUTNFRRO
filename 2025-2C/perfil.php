<?php

session_start();

include_once "funciones.php";

if(empty($_SESSION["usuario_actual"])) {
    // Redirigir a la página de inicio de sesión
    header("Location: login.php");
    exit();
}

$sql  = "select * from usuario where email = '".$_SESSION["usuario_actual"]."' LIMIT 1;";
$usuarioObj = consultaSQL($sql);
if(!empty($usuarioObj)){
    $arregloUsuario = mysqli_fetch_assoc($usuarioObj);
    $_SESSION["rol"] = $arregloUsuario["rol"];
    $_SESSION["nombre"] = $arregloUsuario["nombre"];
    $_SESSION["apellido"] = $arregloUsuario["apellido"];
}
?>

<center>
    <h1>Bienvenido <?= $_SESSION["nombre"] ?> - (<?= $_SESSION["rol"] ?>)</h1>
</center>
<?= $_SESSION["nombre"] ?>
<?php echo $_SESSION["nombre"]; ?>

<h3>Alquileres del usuario</h3>
<?php

$consultaPeliculas = "Select * from alquileres where usuario_email = ".$_SESSION["usuario_actual"]." and fecha_vencimiento <= NOW()";

$resultadoPeliculas = consultaSQL($consultaPeliculas);

if(!empty($resultadoPeliculas)) {
    while($pelicula = mysqli_fetch_assoc($resultadoPeliculas)) {
        echo "<p>Película: " . $pelicula["titulo"] . " - Fecha de vencimiento: " . $pelicula["fecha_vencimiento"] . "</p><br />";
        ?>
        <p>Película: <?= $pelicula["titulo"] ?> - Fecha de vencimiento: <?= $pelicula["fecha_vencimiento"] ?> - 
            <a href="pelicula.php?id=<?= $pelicula["id"] ?>" target="_blank">Ver sinopsis</a>    
        </p>
        <?php
    }
}

?>