<?php

session_start();

echo $_SESSION["clima"]; // El clima está nublado...

if($_SESSION["usuario_valido"]){
    echo "El usuario está logueado:";
    print_r($_SESSION);
}else{
    echo "ERROR";
}


?>