<?php

$archivo = "Nombre.Pre.sentación.pdf";

$arreglo = explode(".", $archivo);

//$extension = end($arreglo);
//$extension = $arreglo[array_key_last($arreglo)];

//echo "La extensión es: ";
//echo end($arreglo);

echo "La extensión es: " . end($arreglo);

//print_r($arreglo);
