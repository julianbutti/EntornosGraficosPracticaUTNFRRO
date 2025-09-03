<?php

if(!empty($_POST)){

    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);

    if(!empty($email) && !empty($password)) {
        // Aquí puedes procesar el registro
        $sql = "INSERT INTO usuarios (email, password) VALUES ('$email', '$password')";
        if(consultaSQL($sql)) {
            echo "Registro exitoso";
        } else {
            echo "ERROR: No se pudo registrar al usuario.";
        }
    } else {
        echo "ERROR: No están completos los campos...";
    }
}else{
    header("Location: registro.php");
    exit();
}
