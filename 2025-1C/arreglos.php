<?php 


$arreglo = [];
/*
$arreglo['colores'] = ['rojo', 'verde', 'azul'];
$arreglo['numeros'] = [1, 2, 3];
*/
$arreglo['bandera'] = true;

$arreglo['favorito'] = 'verde';

$arreglo['fecha']['creacion'] = '2025-01-01';
$arreglo['fecha']['modificacion'] = '2025-01-02';

$arreglo['fecha']['colores'] = ['rojo', 'verde', 'azul'];


echo "Fecha de creación: " . $arreglo['fecha']['creacion'];
/*
echo "<pre>";
print_r($arreglo);
echo "</pre>";

_*/

$resultado = mail("destinatario@example.com", "Asunto del correo", "Cuerpo del correo");
if($resultado) {
    echo "El correo se envió correctamente.";
} else {
    echo "Hubo un error al enviar el correo.";
}

try {
    // Código que puede generar una excepción
} catch (Exception $e) {
    // Manejo de la excepción
}