<?php

include_once "funciones.php";

if(!empty($_POST["accion"]) AND $_POST["accion"] == "nuevo"){
    if(!empty($_POST["nombre"]) AND !empty($_POST["raza"])){
        //Guardo el nuevo
        $_POST["nombre"] = trim($_POST["nombre"]);
        $_POST["raza"] = strtoupper($_POST["raza"]);
        $consultaInsert = "INSERT INTO mascotas (nombre, raza) VALUES ('".$_POST["nombre"]."','".$_POST["raza"]."')";
        consultaSQL($consultaInsert);
    }
}

if(!empty($_POST["accion"]) AND $_POST["accion"] == "editar"){
    if(!empty($_POST["nombre"]) AND !empty($_POST["raza"]) AND !empty($_POST["id"])){
        //Guardo el editado
        $_POST["nombre"] = trim($_POST["nombre"]);
        $_POST["raza"] = strtoupper($_POST["raza"]);
        $consultaUpdate = "UPDATE mascotas SET nombre = '".$_POST["nombre"]."', raza = '".$_POST["raza"]."' WHERE id = '".$_POST["id"]."';";
        consultaSQL($consultaUpdate);
    }
}

if(!empty($_GET["idEliminar"])){
    $idParaBorrar = (int) trim($_GET["idEliminar"]);

    $consultaDelete = "DELETE FROM mascotas WHERE id = " . $idParaBorrar;
    consultaSQL($consultaDelete);
    
}


if(!empty($_GET["idEditar"])){
    $idParaEditar = (int) trim($_GET["idEditar"]);

    $consultaParaEditar = "SELECT * FROM mascotas WHERE id = " . $idParaEditar;
    $objetoAEditar = consultaSQL($consultaParaEditar);
    if($objetoAEditar){
        $arrayAEditar = mysqli_fetch_assoc($objetoAEditar);
    }
    
    
}
if(!empty($_GET["search"])){
    //Consulta de búsqueda
    $s = trim($_GET["search"]);
    $consultaSelect = "
        SELECT * FROM mascotas 
            WHERE nombre LIKE '%$s%' OR raza LIKE '%$s%' OR id = '$s'
        ORDER BY nombre ASC;";
}else{
    /*
    if(!empty($_GET["o"]) AND $_GET["o"] == "raza")
        $consultaSelect = "SELECT * FROM mascotas ORDER BY raza ASC;";    
    else
        $consultaSelect = "SELECT * FROM mascotas ORDER BY nombre ASC;";
    */
    $consultaSelect = "SELECT * FROM mascotas ";
    if(!empty($_GET["o"]) AND $_GET["o"] == "raza")
        $consultaSelect .= " ORDER BY raza ASC";  // $consultaSelect = $consultaSelect . " ORDER BY raza ASC";
    else
        $consultaSelect .= " ORDER BY nombre ASC";
}

$resultados = consultaSQL($consultaSelect);
/*
if(!empty($resultados)){
    while($mascota = mysqli_fetch_array($resultados)){
        echo "<strong>" . $mascota["nombre"] . "</strong> - Raza: ( " . $mascota["raza"] . ")" . "<br />";
    }
}
    echo " Text: $a"; // Interpreta la var.
    echo ' Text: $a'; // Literal
*/

if(!empty($resultados)){
    ?>
    <form action="" method="GET"><input type="text" name="search" placeholder="Buscar...." /><input type="submit" /></form>
    <table>
        <th>
            <td>ID</td>
            <td>Nombre</td>
            <td>Raza <a href="?o=raza">(Ordenar)</a></td>
            <td>Eliminar</td>
            <td>Editar</td>
        </th>
        <?php
        while($mascota = mysqli_fetch_array($resultados)){
            echo "<tr>";
                echo "<td>". $mascota["id"] . "</td>";
                echo "<td>". "<strong>" . $mascota["nombre"] . "</strong>" . "</td>";
                ?>
                <td><?= $mascota["raza"] ?></td>
                <td><a href="mascotas.php?idEliminar=<?= $mascota["id"] ?>" style="color:red;">Eliminar</a></td>
                <td><a href="mascotas.php?idEditar=<?= $mascota["id"] ?>" style="color:green;">EDITAR</a></td>
                <?php
            echo "</tr>";
            
        }
    echo "</table>";
}

?>

<?php if(!empty($arrayAEditar)): ?>
    <form action="" method="POST">
        <input type="hidden" name="accion" value="editar" />
        <input type="hidden" name="id" value="<?= $arrayAEditar["id"] ?>" />
        Nombre: <input type="text" name="nombre" value="<?= $arrayAEditar["nombre"] ?>" required /> <br />
        Raza: <input type="text" name="raza" value="<?= $arrayAEditar["raza"] ?>" required /> <br />
        <input type="submit" value="Guardar" />
    </form>
<?php else: ?>
    <form action="" method="POST">
        <input type="hidden" name="accion" value="nuevo" />
        Nombre: <input type="text" name="nombre" required /> <br />
        Raza: <input type="text" name="raza" required /> <br />
        <input type="submit" value="Guardar" />
    </form>
<?php endif; ?>