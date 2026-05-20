<?php

session_start();

if(!empty($_POST["user"]) AND !empty($_POST["clave"])){
    //Consulta a la DB
    if($_POST["user"] == "julian" AND md5($_POST["clave"]) == md5("clave")){
        $_SESSION["valido"] = true;
        setcookie("ultimo_login", date('Ymd-His'),0);
    }else{
        $_SESSION["valido"] = false;
    }
}

if($_SESSION["valido"] === true){
    header('Location: productos.php');
    exit();
}
?>
<br /><br /><br /><br />
<form action="" method="POST">
    Usuario: <input type="text" name="user" /><br />
    Contraseña: <input type="password" name="clave" /><br />
    <input type="submit" value="Ingresar" />
</form>