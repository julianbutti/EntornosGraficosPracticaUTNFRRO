<?php

session_start();

$_SESSION["usuario_valido"] = false;

if(!empty($_POST)){

    $link = mysqli_connect("locahost","root","pass","clientes");
    $consultaSQL = "SELECT * FROM usuarios WHERE email = '".$_POST["usuario"]."' AND clave = '".md5($_POST["clave"])."' ;";
    $resultadoConsulta = mysqli_query($link,$consultaSQL);
    mysqli_close($link);
    if($resultadoConsulta){
        if(mysqli_num_rows($resultadoConsulta) > 0){
            //Existe ese usuario en la base de datos....
            $_SESSION["usuario_valido"] = true;
            $_SESSION["rol"] = "admin";
            $_SESSION["email"] = $_POST["usuario"];

            header("Location:dashboard.php");exit();
        }
    }
    /*

    if($_POST["usuario"] == "juan@perez.com" AND md5($_POST["clave"]) == md5("contraseña")){
        $_SESSION["usuario_valido"] = true;
        $_SESSION["rol"] = "admin";
        $_SESSION["email"] = $_POST["usuario"];

        header("Location:dashboard.php");exit();
    }else{
        echo "Hubo algún error....";
    }
        */
}

?><br />
<form action="" method="POST">
    Usuario:
    <input type="email" name="usuario" placeholder="Complete su email" required <?php if(!empty($_POST["usuario"])) echo 'value="'.$_POST["usuario"].'"'; ?> />
    <input type="email" name="usuario" placeholder="Complete su email" required value="<?php if(!empty($_POST["usuario"])) echo $_POST["usuario"]; ?>" />
    <input type="email" name="usuario" placeholder="Complete su email" required value="<?php echo $_POST["usuario"]; ?>" />
    <input type="email" name="usuario" placeholder="Complete su email" required value="<?= $_POST["usuario"] ?>" />
    <br />
    Clave:
    <input type="password" name="clave" required />
    <input type="submit" value="Acceder" />
</form>