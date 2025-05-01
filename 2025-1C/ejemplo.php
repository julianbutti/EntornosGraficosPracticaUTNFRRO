<div>
    <h1>Hola Mundo !</h1>
    <p class="etc">Hoy es <?php echo date('d/m'); ?> </p>
    <br />

    <?php

    echo "<h1>Hola Mundo !</h1>";

    echo "<p>asdasdas dasd as das</p>";
    echo "<br />";

    echo $variables;
    $variables = "Manzanas";
    $variable2 = 23;
    $variable3 = true;
    echo $variables;

    $a = $b = $c = '';
    
    //print("Hola");

    /*
    print_r($objetoArreglo);
    var_dump($objetoArreglo);
    */

    $variables = false;
    $variable5 = "";

    if($a > 3){
        //asdasd
    }else{

    }

    if($a > 3):
        $a = 22;
    else:
        $b = 223;
    endif;


    if($a == "Juan")
        echo "Se llama Juan";

    while ($a <= 10) {
        # code...
    }

    for ($i=0; $i < 100; $i++) { 
        # code...
    }

    foreach ($variable as $key => $value) {
        # code...
    }

    do {
        # code...
    } while ($a <= 10);

    switch ($variable) {
        case 'value':
            # code...
            break;
        
        default:
            # code...
            break;
    }

    if($a == 2){
        
    }elseif($asd === 2){

    }elseif($aasdasdasd > 23){

    }else{

    }

    $x = 2;

    if($x == 2){
        echo true;
    }

    if($x === 2){
        echo true;
    }

    if($x == "2"){
        echo true;
    }

    if($x !== "2"){
        echo true;
    }

    if($x != "2"){
        echo false;
    }

    $a23423dasdasd;
    $nombre_perro_variable;
    $nombrePerroVariable;

    define("PERRO","mediano");
    echo PERRO;

    function suma($p1, $p2){
        return ($p1 + $p2);
    }

    echo (string) suma(23,3434);
    echo "Hola " . "Juan " . "mi edad es: " . suma(24,15) . "<br />";

    function bienvenida($msgBienvenida = "Hola", $nombre = '-', $edad = 0){

        $z = $msgBienvenida . " - <strong>" . $nombre . "</strong><br />";
        //
        if($edad > 0){
            //$z = $z . " ( tengo " . $edad ." años.... )<br /><br />";
            $z .= " ( tengo " . $edad ." años.... )<br /><br />";
        }
        //
        //
        return $z;
    }

    bienvenida();
    bienvenida('','',30);
    bienvenida("Hola ! ");
    echo bienvenida("Hola ! ", "Juan");
    $variableRta = bienvenida("Hola ! ", "Pedro", 45);
    echo $variableRta;

    //$_GET $_POST $_SESSION $_COOKIE

    include_once "introphp.html";

    include_once "carpeta/footer.php";

    ?>
</div>