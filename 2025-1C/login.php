<?php
session_start();

if(!empty($_POST) AND !empty($_POST['usr']) AND !empty($_POST['pass'])){

    if($_POST['usr'] === 'juanPerez24' AND md5($_POST['pass']) === md5('clave123456789') ){
        //Usuario válido
        $_SESSION['valido'] = true;
        header('Location:privado.php');exit();
    }else{
        $_SESSION['valido'] = false;
        $_SESSION = array(); unset($_SESSION);
        echo "Acceso inválido";
        exit();
    }
}


var_dump($_SESSION);
?>
<form action="" method="POST">
    usuario: <input type="text" name="usr" /><br />
    clave: <input type="password" name="pass" /><br />
    <input type="submit" value="Ingresar" />
</form>