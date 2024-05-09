<?php 
$usuario = "asdfasdfasdf";
$clave = "ASDASDFSADFfadsgasdfasdfsadf";

?>
<html>
    <head></head>
    <body>
        <h1>Hola Mundo...</h1>
        <div class="bloques">
            <p class="<?php $a = (date('H') >= 23)? 'warning':''; ?>" >
                Esto es un párrafo.
                La hora actual es: <?php echo date('H:i'); ?>
                <?php
                //Comentario en una línea
                /* 
                
                FUNCTION DATE ( formato )
                    Y: 2024
                    m: 05
                    d: 08
                    H: 21
                    i: 23
                    s: 22
                    date('Y-m-d H:i:s')
                    date('d/m/Y')
                */
                ?>
                <br /><br />
                La hora actual es: <?= date('H:i') ?>
                <?php

                echo $a;

                $variable1 = "STRING";
                $variable1 = 34;
                $variable1 = (int) date('H');
                
                if($variable1 >= 23){
                    echo "Comienza el paro de transporte...";
                }else{
                    echo "Todavía tenemos clases...";
                }

                if($variable1 >= 23): ?>
                    ok
                <?php else: ?>
                    TEST
                <?php endif;


                $v = 1;
                echo (1 == $v) ? 'Yes' : 'No'; // 'Yes' will be printed
                if(1 == $v){
                    echo 'Yes';
                }else{
                    echo 'No';
                }

                /*
                1 === 1   true
                '1' === 1   false
                '1' == 1   true
                */
                if(1 === $v){
                    echo 'Vale 1 y son del mismo TIPO';
                }elseif($v == 2){
                    echo 'Vale 2';
                }elseif($v == 3){
                    echo 'Vale 3';
                }else{
                    echo "Vale otra cosa";
                }
                
                ?>
            </p>
        </div>
        
        <style>
            .bloques {
                margin: 20px;
            }
            .warning{
                color:red;
                font-style:italic;
            }
        </style>
    </body>
</html>