<html>

<head>
    <title>Búsqueda</title>
</head>

<body>
    <center>
        <?php
            if(!empty($_POST['s'])){
                //Buscar en un array
                //Buscar en una DB
                echo "Buscaste: '".$_POST['s']."'";
            }
        ?>
        <br />
        <br />
        <form action="" method="POST">
            Palabra clave:<br />
            <input type="text" required name="s" value="<?php if(!empty($_POST['s'])) echo $_POST['s']; ?>" />
            <br /><br /> 
            <input type="submit" value="Buscar" />
        </form>
        <br />
        
    </center>
    
</body>

</html>