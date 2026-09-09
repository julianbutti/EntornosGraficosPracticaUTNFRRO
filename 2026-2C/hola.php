<html>
    <head>
        <title>Ejemplo de html</title>
        <meta author="FRRO" />
    </head>
    <body>
        <h1 class="anchoRojo titular">La fecha de hoy es <?php echo date('d/m/Y H:i:s'); ?></h1>
        <?php
        function saludo($parametro1, $parametro2, $parametro3 = null){
            $salida = $parametro1."-".$parametro2;
            if(!empty($parametro3))
                $salida = $salida."-".$parametro3;
            
            return $salida;
        }


        $variable = "string cualquiera";
        $variable = 2;
        $variable = array();
        $variable = null;

        $variable = round(232*2323/34,2);

        if($variable === "1"){

        }else{

        }

        $condicion = "";
        if($condicion):

        else:

        endif;

        if(!empty($arreglo) AND is_array($arreglo) AND count($arreglo) > 0){
            foreach($arreglo as $elemento){
                echo $elemento;
                echo "<br />";
                if($elemento == "salida"){
                    exit("llego una salida");
                }
            }
        }


        var_dump($variable);
        print_r($variable);
        

        $variable = (string) 3; // $variable = "3";


        $arregloFrutas = ["manzanas","peras","kiwis"];
        // 0->"manzanas", 1->"peras".....
        $arregloFrutas = [0 => "manzanas",1 => "peras",2 => "kiwis","favorito" => 1];

        $arregloFrutas = [1=>"manzanas","peras","kiwis","favorito" => [1,2]];

        echo "<pre>";
        print_r($arregloFrutas);
        echo "</pre><br />";


        //echo "Mi favorito es : ".$arregloFrutas[1];
        $clave = $arregloFrutas["favorito"][1];
        echo "Mi favorito es : ".$arregloFrutas[$clave];

        ?>
        <h1 class="anchoRojo titular">La fecha de hoy es <?= date('d/m/Y') ?></h1>
        <?php
            echo '<h1 class="anchoRojo titular">La fecha de hoy es '.date('d/m/Y').'</h1>';
        ?>
        <h2>Titulo 2</h2>
        <p>
            <strong>Lorem ipsum</strong> dolor sit amet consectetur adipisicing elit. 
            <br />
            <i>
                Molestias soluta dolores magni asperiores iure officia deserunt provident minima placeat,
                 nobis sint accusantium! Veniam sed omnis porro ab officiis dicta in?
            </i>            
        </p>
        <div style="max-width: 500px;">
            <div id="23423423" class="anchoRojo">
                <div class="anchoRojo">
                    <a href="" id="">Enlace</a>
                    <br />
                    <img src="foto.jpg" alt="Foto de un perro" />
                </div>
            </div>
        </div>
        <?php
        echo '
        <span class="anchoRojo">
            Esto es un span que se ajusta al contenido
        </span>';
        ?>
    
        <table>

        </table>
        

    </body>
</html>