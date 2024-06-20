<?php

include_once "conexion.php";

if(!empty($_POST["id"])){
    $query = "UPDATE clientes SET 
        nombre = '".$_POST["nombre"]."', 
        apellido = '".$_POST["apellido"]."' 
        WHERE id = '".$_POST["id"]."';";

    consultaSql($query);
}

if(!empty($_GET["clienteid"])){

    $query = "SELECT * FROM clientes WHERE id = '".$_GET["clienteid"]."';";

    $resultado = consultaSql($query);
    if(!empty($resultado)){
        //MOSTRAR UN FORMULARIO
        ?>
        <form action="?clienteid=<?php echo $_GET["clienteid"]; ?>" method="POST">
            <input type="hidden" name="id" value="<?php echo $_GET["clienteid"]; ?>" />
            Nombre: <input type="text" name="nombre" value="<?php echo $resultado["nombre"]; ?>" />
            Apellido: <input type="text" name="apellido" value="<?php echo $resultado["apellido"]; ?>" />
            <input type="submit" value="Guardar" />
        </form>
        <?php
    }else{
        echo "No existe para ser editado...";
    }
   
}
