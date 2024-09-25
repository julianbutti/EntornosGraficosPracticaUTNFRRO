
<form action="" method="POST">
    Usuario:
    <input type="text" name="usuario" required />
    Clave:
    <input type="password" name="clave" />
    <input type="submit" value="Enviar" />
</form>

<?php

if(!empty($_POST)){
    //Envié el formulario
    
    if(empty($_POST['usuario']))
        echo "El usuario no puede ser vacío !";

    if(empty($_POST['clave']))
        echo "La clave es obligatoria !";

    include_once "funciones.php";
    $resultado = validarUSuario($_POST["usuario"], $_POST["clave"]);
    if($resultado) 
        exit(header("Location: panel.php"));
}
