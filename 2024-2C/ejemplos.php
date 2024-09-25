<?php

session_start();
/*
setcookie("nombreCookie",rand(),time()+3600);
setcookie("nombreCookie2","texto X",time()+3600);

//header("Location: ejemplos.php");exit();
echo $_COOKIE["nombreCookie"];
*/
//Arreglos

$arregloA = array();
$arregloB = [];

$arregloA[1] = "valor1";
$arregloA["pais"] = "Argentina";

//echo $arregloA["pais"];
$arregloA[] = "Valor X";

foreach($arregloA as $valor){
    echo $valor;
    echo " -- ";
}

echo "<br />";

foreach ($arregloA as $key => $value) {
    echo "En la clave: (" . $key . ") está el valor: " . $value;
    echo "<br />";
}



$arregloA[] = ["Naranjas", "Frutillas", "Bananas"];



//Ejemplo frutillas:
//echo $arregloA[3][1];


$arregloA[rand()][date('Y')]["claveeee"][232323] = "Valor Z";
$arregloA[3][2] = "Uvas";

echo "<pre>";
print_r($arregloA);

$arregloA = []; unset($arregloA); $arregloA = array();  $arregloA = ""; $arregloA = null;
$arregloA[3] = "";
unset($arregloA[3]);


$_SESSION["usuarioLogueado"] = $_POST["usuario"];
//$_SESSION["rol"] = calcularRol($user_id);

$_SESSION["valido"] = "1";

if($_SESSION["valido"] == true){
    //OK
    include_once "funciones.php";
    include "header.html";
    include_once "dashboard.php";
    include "footer.html";
}else{
    exit(header("Location: login.php"));
}