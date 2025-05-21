
<?php
$colores = ["1" => "Rojo", 2 => "Azul", 3 => "Verde"];

echo "<pre>";
print_r($_GET);
print_r($_POST);
echo "</pre>";

?>
<br />    <br />
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
    Ingrese apellido:  <input type="text" name="apellido" required value="<?php if(!empty($_POST['apellido'])) echo $_POST['apellido']; ?>" />
    <br />    <br />
    Edad: <input type="number" min="18" max="99" name="edad" value="25" />
    <br />    <br />
    Email: <input type="email" name="correo" placeholder="Ingrese su email" value="<?php if(!empty($_POST['correo'])) echo $_POST['correo']; ?>" />
    <br />    <br />
    Acepto términos y condiciones: <input type="checkbox" name="aceptaTyC" value="1" />
    <br />    <br />
    Clave: <input type="password" name="clave" />
    <br />    <br />
    
    Opción de color:
    <select name="color">
        <option value="">Seleccione...</option>
        <?php
        foreach ($colores as $key => $value) {
            echo '<option value="'.$key.'">' . $value . '</option>';
            /*
            ?>
            <option value="<?= $key ?>"><?= $value ?></option>
            <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
            <?php
            */
        }
        ?>
        <option value="xxxx">Otro</option>
    </select>

    <br />    <br />
    Comentario:<br />
    <textarea name="comentarios">Value</textarea>
    <br />    <br />
    <input type="submit" value="Enviar Formulario" />
</form>

