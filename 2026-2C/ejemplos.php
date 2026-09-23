<?php

//Sesiones - Se almacenan del lado del servidor
session_start();

$_SESSION["ultimo_acceso"] = date('d/m/Y');
echo $_SESSION["ultimo_acceso"];

print_r($_SESSION);

$_SESSION["usuario_logueado"] = "admin";
$_SESSION["usuario_logueado"] = "";

$_SESSION = array();
unset($_SESSION);
session_destroy();


//Cookies - se almacenan del lado del cliente
setcookie("ultima_consulta",date('d/m/Y H:i:s'),time()+60*60*6);
//setcookie("ultima_consulta","-",time()+60*60*6);
//setcookie("ultima_consulta","",0);

echo $_COOKIE["ultima_consulta"];