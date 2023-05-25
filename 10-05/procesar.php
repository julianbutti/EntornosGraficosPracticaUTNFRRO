<?php

if(empty($_POST)){
    header('Location: form.php?respuesta=Te faltan completar datos');
    exit();
}

echo "<pre>";
    print_r($_POST);
echo "</pre>";

echo "<br /><br /><br />";

echo "El nombre cargado es: " . $_POST['nombre'];

if(!empty($_POST['apellido'])){
    echo ", con apellido: " . $_POST['apellido'];
}else{
    //echo "ERROR";
    //exit();
}

echo " y su edad es (".$_POST['edad'].").";
echo "<br />";
echo $_POST[0];
?>
<br /><br />
<br /><br /><br /><br /><br />

<a href="form.php">VOLVER al formulario</a>
