<?php

if(!empty($_GET["marcaid"])){
    // Marcar el seleccionado

    setcookie("elementoMarcado",$_GET["marcaid"],3600);
}
header("Location: listado.php");


?>

<?php 
session_start();

if(!empty($_GET["marcaid"]))
    $_SESSION["elementoSeleccionado"][date('YmdHis')] = $_GET["marcaid"];