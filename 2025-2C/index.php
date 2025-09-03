<?php

echo "Hola Mundo";
$nombre_persona = "Hola Mundo";
$nombrePersona = "Hola Mundo";

$nombre_persona = 23;

$var = 1;

$variableX = "";

if(isset($variableX)){
    //Tiene un valor asignado...
}

if(empty($variableX)){
    //Tiene un valor y además no es vacío
}else{
    //Dar un error
}

if(!empty($variableX)){
    //Dar error
    /*
    sd
    asd
    asd
    sdfsd
    */
}

$arreglo = array();
$arreglo[1] = "rojo";
$arreglo[] = "verde";
$arreglo[3] = "azul";
$arreglo["favorito"] = "dorado";
$arreglo["dias"] = array("Lunes","Martes","Miercoles");

echo "Hola, mi color favorito es el : " . $arreglo["favorito"] . "<br />";

echo "El primer día de la semana es : " . $arreglo["dias"][0];

echo "<pre>";
print_r($arreglo);
echo "</pre>";

include_once "funciones.php";

echo saludo("Juan 2");

?>