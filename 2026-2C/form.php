<?php

//print_r($_GET);
//print_r($_POST);

if(!empty($_POST)){
    echo "Bienvenido ". $_POST["nombre"] . $_POST["apellido"];
}
if(!empty($_GET)){
    echo "El tipo de formulario es ". $_GET["tipo-formulario"]; //El tipo de formulario es alta
}

?>
<form action="?tipo-formulario=alta" method="POST">

    Nombre:<input type="text" name="nombre" value="-" placeholder="Ingrese tu nombre" required />
    Apellido:<input type="text" name="apellido" value="-" placeholder="Ingrese su apellido" required />

    <select>
        <option></option>
    </select>

    <textarea></textarea>

    <input type="submit" value="Enviar datos" />
    <input type="reset" value="Limpiar form" />

</form>