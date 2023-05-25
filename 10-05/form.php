<html>

<head>
    <title>Formulario</title>
</head>

<body>
    <center>
        <br />
        <?php
        if(!empty($_GET)){
            if(!empty($_GET['respuesta'])){
                echo "
                <div class=\"error\">
                    ".$_GET['respuesta']."
                </div>
                ";
            }
        }
        
        ?>
        <br />
        <form action="procesar.php" method="POST">
            Nombre:<br />
            <input type="text" required name="nombre" placeholder="Ingrese nombre" />
            <br /><br /> Apellido:
            <br />
            <input type="text" name="apellido" placeholder="Ingrese Apellido" />
            <br /><br /> Edad:
            <br />
            <input type="number" min="18" max="50" required name="edad" placeholder="Ingrese edad" />
            <br /><br />
            <input type="submit" value="Enviar" />
        </form>
        <br />
        <a href="procesar.php?nombre=sdaf&edad=40">LINK GET</a>
    </center>
    <style>
        .error{
            background-color: red;
            color: white;
            padding: 50px;
        }
    </style>
</body>

</html>