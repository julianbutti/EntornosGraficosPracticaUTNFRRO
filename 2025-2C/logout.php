<?php


session_start();

unset($_SESSION);
$_SESSION = null;
$_SESSION = "";

session_destroy();

//header("Location: ejemplo-8-9.php");
//exit();
?>

Sesión cerrada ok...