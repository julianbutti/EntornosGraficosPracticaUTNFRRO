<?php
session_start();
if($_SESSION['valido'] !== true){
    header('Location: login.php');
    exit();
}

echo "<h1>Lista de productos</h1>";

//$link = mysqli_connect("localhost","root","root","pizeria");
$link = mysqli_connect("mysql","root","root");
mysqli_select_db($link,"pizeria");
if(!empty($link)){

    if(!empty($_POST["nombre"]) AND !empty($_POST["precio"])){
        $consultaInsertar = "INSERT INTO productos VALUES (NULL,'".$_POST["nombre"]."','".$_POST["precio"]."','".$_POST["descripcion"]."',0)";
        //echo $consultaInsertar;exit();
        mysqli_query($link, $consultaInsertar);
    }

    if(!empty($_GET["idEliminar"])){
        //Algo para eliminar
        //echo "Hay que eliminar el id: ". $_GET["idEliminar"];exit();
        $consultaEliminar = "DELETE FROM productos WHERE id = ".$_GET["idEliminar"];
        mysqli_query($link, $consultaEliminar);
    }

    $respuestaQuery = mysqli_query($link, "SELECT * from productos ORDER BY precio ASC;");
}
mysqli_close($link);

if(!empty($respuestaQuery)){
    //Recorrer los datos
    while($producto = mysqli_fetch_array($respuestaQuery)){
        //print_r($producto);
        if($producto["activo"] == 1){
            echo "- ID: " . $producto["id"];
            echo "- Nombre: " . $producto["nombre"];
            echo "- $ " . $producto["precio"];
            echo "- <a href='?idEliminar=".$producto["id"]."'>Eliminar</a>";
            echo "<br />";
        }
        
    }
}else{
    echo "SIN DATOS para mostrar....";
}
?>
<hr />
<form action="" method="POST">
    Nombre: <input type="text" name="nombre" required />
    <br />
    Precio <input type="number" name="precio" required />
    <br />
    Descripcion: <input type="text" name="descripcion" />
    <br />
    
    <input type="submit" value="Guardar" />
</form>

<br /><br /><br />
<?php
    if(!empty($_COOKIE['ultimo_login'])){
        echo "La última vez que ingresé era: " . $_COOKIE['ultimo_login'];
    }
?>
<br /><br />
<a href="salir.php">Cerrar sesión usuario...</a>