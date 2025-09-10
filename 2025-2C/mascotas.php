<?php

$mensaje = "";

function consultaSQL($par1){
    $conexion = mysqli_connect("localhost","root","clave","portalMascotas");
    $resultado = mysqli_query($conexion, $par1);
    mysqli_close($conexion);
    return $resultado;
}


if(!empty($_POST) && $_POST["tipo"] == "nuevo"){
    //Guardar el nuevo registro
    if(!empty($_POST["nombre"])){
        $consultaInsert = 'INSERT INTO mascotas (id, nombre, raza) VALUES 
                        ("","'.$_POST['nombre'].'","'.$_POST['raza'].'")';
        
        $resultado = consultaSQL($consultaInsert);
        
        if($resultado)
            $mensaje = "OK";
        else
            $mensaje = "Hubo algún error....";
    }else{
        $mensaje = "El nombre no puede ser vacío...";
    }
}

if(!empty($_POST) && $_POST["tipo"] == "editar"){
    if(!empty($_POST["nombre"]) AND !empty($_POST["id"])){
        $consultaEditar = 'UPDATE mascotas SET nombre ="'.$_POST['nombre'].'",
        raza = "'.$_POST['raza'].'" WHERE id = "'.$_POST["id"].'";';
        
        $resultado = consultaSQL($consultaEditar);
        
        if($resultado)
            $mensaje = "OK - Se editó...";
        else
            $mensaje = "Hubo algún error....";
    }else{
        $mensaje = "El id o nombre no puede ser vacío...";
    }
}

if(!empty($_GET['idEliminar'])){
    $consultaDelete = "DELETE FROM mascotas WHERE id = '".$_GET['idEliminar']."' LIMIT 1;";
    consultaSQL($consultaDelete);
}

if(!empty($_GET['idEditar'])){
    $consultaEditar = "SELECT *  FROM mascotas WHERE id = '".$_GET['idEditar']."' LIMIT 1;";
    $mascotaEditar = consultaSQL($consultaEditar);
}

$consultaLista = "SELECT * FROM mascotas ORDER BY nombre ASC";
$listaMascotas = consultaSQL($consultaLista);

?>
<center>
    <?= $mensaje ?>
    <?php
    if(!empty($mascotaEditar)){
        $mascotaArreglo = mysqli_fetch_assoc($mascotaEditar);
        ?>
            <div class="formulario" style="background-color: yellow;">
                <form action="" method="POST">
                    <input type="hidden" name="tipo" value="editar" />
                    <input type="hidden" name="id" value="<?= $mascotaArreglo['id'] ?>" />
                    Nombre: <input type="text" value="<?= $mascotaArreglo['nombre'] ?>" name="nombre" required /><br />
                    Raza: <input type="text" value="<?= $mascotaArreglo['raza'] ?>" name="raza" /><br />
                    <input type="submit" value="Guardar" />
                </form>
            </div>
        <?php
    }else{
        ?>
        <div class="formulario" style="background-color: lightblue;">
            <form action="" method="POST">
                <input type="hidden" name="tipo" value="nuevo" />
                Nombre: <input type="text" name="nombre" required /><br />
                Raza: <input type="text" name="raza" /><br />
                <input type="submit" value="Guardar" />
            </form>
        </div>
        <?php
    }
    ?>
    
</center>

<style>
    .formulario{
        padding: 50px;
    }
</style>
<?php

if(!empty($listaMascotas)):
    echo "<table>";
    echo "<th><td>ID</td><td>Nombre</td><td>Raza</td><td>Acciones</td></th>";
    while($mascota = mysqli_fetch_array($listaMascotas)){
        ?>
        <tr>
            <td><?= $mascota["id"] ?></td>
            <td><?= $mascota["nombre"] ?></td>
            <td><?= $mascota["raza"] ?></td>
            <td>
                <a href="?idEliminar=<?= $mascota['id'] ?>">X</a> | 
                <a href="?idEditar=<?= $mascota['id'] ?>">EDITAR</a> 
            </td>
        </tr>
        <?php
    }
    echo "</table>";
endif;