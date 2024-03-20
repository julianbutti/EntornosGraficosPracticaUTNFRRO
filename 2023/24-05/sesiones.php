<?php
session_start();
//Vínculo  CLIENTE - SERVIDOR ( Navegador - Servidor ) 

/*
$_SESSION['usuario'] = "Juan";
$_SESSION['valido'] = true;
$_SESSION['email'] = "Juan@test.com";
*/
//echo "<pre>"; print_r($_SESSION);

$_SESSION['accesos'][] = date('Y-m-d H:i:s');
echo "<pre>"; print_r($_SESSION);
exit();


if($_SESSION['valido']){
    //Todo ok
}else{
    echo "El usuario no está logueado";
    exit();
}

echo "Bienvenido ".$_SESSION['usuario'];

//echo "<pre>"; print_r($_SESSION);
unset($_SESSION);
$_SESSION = [];
$_SESSION = array();
session_destroy();

//Recomendado
unset($_SESSION);session_destroy();