
<form action="" method="GET">
    Buscar:
    <input type="text" name="keyword" required />
    <input type="submit" value="Enviar" />
</form>

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
