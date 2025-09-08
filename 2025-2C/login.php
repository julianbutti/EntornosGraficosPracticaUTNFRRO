<?php

session_start();

if(!empty($_POST)){

    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);

    if(!empty($email) && !empty($password)) {
        // Aquí puedes procesar el inicio de sesión
        if(validarUsuario($email, $password)) {
            $_SESSION["usuario_actual"] = $email;
            header("Location: perfil.php");
            exit();
        } else {
            echo "ERROR: Credenciales inválidas.";
        }
    } else {
        echo "ERROR: No están completos los campos...";
    }
}


?>
<center>

    <form action="" method="POST">
        Email: <input type="email" name="email" placeholder="Email" required />
        Password : <input type="password" name="password" placeholder="Password" />
        <input type="submit" value="Iniciar sesión">
    </form>
</center>