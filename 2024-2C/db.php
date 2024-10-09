<?php

$link = mysqli_connect("localhost","root","claveRoot");
mysqli_select_db($link,"veterinaria_db");

$consulta = "SELECT * from mascotas;";

$resultados = mysqli_query($link, $consulta);

mysqli_close($link);

if($resultados){
    while($elemento = mysqli_fetch_array($resultados)){
        //print_r($elemento);
        echo "Nombre mascota: " . $elemento["nombre"] . " <br />";
    }
}else{
    echo "No hay elementos";
}


/*
$link = mysqli_connect("localhost","root","claveRoot","veterinaria_db");
$consulta = "DELETE from mascotas WHERE id = 233;";
mysqli_query($link, $consulta);
mysqli_close($link);
*/

include_once "config.php";
function consultaSQL( $consulta ){
    $link = mysqli_connect("localhost",DB_HOST,DB_PASS,"veterinaria_db");
    $resultado = mysqli_query($link, $consulta);
    mysqli_close($link);
    return $resultado;
}

consultaSQL("DELETE from mascotas WHERE id = 233;");


consultaSQL("INSERT INTO usuarios (nombre, clave) VALUES ('Juan','".md5($_POST['clave'])."')");

$query = "SELECT * FROM usuarios where user = '".$_POST['email']."' AND clave = '".md5($_POST['clave'])."';";
//echo $query;exit();
$usuarioValido = consultaSQL($query);
if($usuarioValido AND mysqli_num_rows($usuarioValido) > 0){
    
    session_start();
    $_SESSION['usuarioActual'] = $_POST['email'];
    $_SESSION['valido'] = true;
}else{
    echo "Usuario o clave incorrecto !";
}