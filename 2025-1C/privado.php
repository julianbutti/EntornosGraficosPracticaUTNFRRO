<?php

session_start();

if(!empty($_SESSION['valido']) AND $_SESSION['valido'] == true){
    //El usuario puede verlo
    var_dump($_SESSION);
}else{
    //No puede verlo
    header('Location:login.php');
    exit();
}

setcookie("ultimo_acceso",date('Y-m-d H:i:s'));
echo " El ultimo ingreso fue:  " . $_COOKIE['ultimo_acceso'];

?>

ENLACES PRIVADOS PARA USUARIOS CON CLAVE !!!