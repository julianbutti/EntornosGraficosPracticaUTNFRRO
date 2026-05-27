<?php

if(isset($_POST['nombre']) AND $_POST['nombre'] != ""  AND $_POST['nombre'] != false ){

}
if(!empty($_POST['nombre'])){
    //Tiene algo...
}
if(!empty($_POST["edad"]) AND $_POST["edad"] > 40){
    echo "ERROR";
}

$pass = md5($_POST["clave"]);

if(!empty($_POST["btnEnviar"])){
    if($_POST["btnEnviar"] == "Enviar"){
        //solo envio

    }else{
        //envio y creo otro...
        header('Location: nuevo.php');exit();
    }
}

//ARREGLOS
$arreglo = array();

$ciudades = ["Rosario","Acebal","Funes"];
$ciudades = [
    "Santa Fe" => ["Rosario","Acebal","Funes"],
    "Buenos Aires" => ["San Pedro","San Nicolás"]
    ];

echo $ciudades["Santa Fe"][0]; //Muestro la primer ciudad de la lista
print_r($ciudades["Santa Fe"]);

$ciudades["Santa Fe"]["Rosario"] = ["Pichincha","Centro","Etchesortu"];

$arreglo2[0]["ValorString"][23232][] = "Nuevo valor";

$ciudades["Santa Fe"][] = "San Lorenzo";

$_SESSION["registros"][date('d/m/Y H:i:s')] = $_POST;

$_POST["clave"] = "valor";

?>

<form method="POST" action="">
    <input type="text" name="nombre" required />
    <input type="email" name="correo" required />
    <input type="number" name="edad" max="40" />
    
    <input type="password" name="clave" />

    Opciones:
    <input type="radio" name="opcion1" value="si"  /> Si
    <input type="radio" name="opcion1" value="no" /> No

    Acepta los terminos: 
    <input type="checkbox" name="AceptaTerminos[]" value="VERDADERO" /> Acepta
    <input type="checkbox" name="AceptaTerminos[]" value="NO" /> No acepta

    <select name="provincia" required>
        <option value="">-- Seleccione --</option>
        <option value="Bsas"> Buenos aires </option>
        <option value="SantaFe" selected>SF</option>
        <option value="Cordoba"> Córdoba </option>
    </select>

    <input type="submit" name="btnEnviar" value="Enviar" />

    <input type="submit" name="btnEnviar" value="Enviar y Crear otro" />
    
    <input type="reset" value="Vaciar" />
</form>
