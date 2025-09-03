<?php
include_once "funciones.php";

if(!empty($_POST)){

    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);

    if(!empty($email) && !empty($password)) {
        // Aquí puedes procesar el registro
        if(insertarRegistroNuevo($email,$password)) {
            //echo "Registro exitoso";
            header("Location: perfil.php");
            exit();
        } else {
            echo "ERROR: No se pudo registrar al usuario.";
        }
    } else {
        echo "ERROR: No están completos los campos...";
    }
}
?>
<center>

    <form action="" method="POST">
        Email: <input type="email" name="email" placeholder="Email" value="<?php echo isset($email) ? $email : ''; ?>" required />
        Password : <input type="password" name="password" placeholder="Password" />
        <input type="submit" value="Registrar">
    </form>
</center>