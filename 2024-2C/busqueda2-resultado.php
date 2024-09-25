<?php

if(!empty($_GET)){
    //Envié el formulario
    
    if(empty($_GET['keyword']))
        echo "Debe buscar alguna palabra clave !";

    
    include_once "funciones.php";
    $resultados = buscarResultados($_GET["keyword"]);
    if($resultados){
        foreach($resultados as $r){
            echo $r . "<br />";
        }
    }
}
?>
<hr />
<?php
include "busqueda2.php";
?>