<?php
session_start();

echo "<pre>";
print_r($_GET);
var_dump($_SESSION);
echo "</pre>";

?>
<br />    <br />
<form action="<?php echo $_SERVER['PHP_SELF'] ?>?valor=X" method="GET">
    Ingrese búsqueda:  <input type="text" name="s" />
    <br />    <br />
    <input type="submit" value="Buscar" />
</form>

<br />    <br /><br />    <br /><br />    <br /><br />    <br /><br />    <br />

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
    Ingrese nombre cliente:  <input type="text" name="cliente" />
    <br />    <br />
    <?php
    if(!empty($_GET["s"])){
        ?>
        <input type="hidden" name="s" value="<?= $_GET['s'] ?>" />
        <?php
    }
    ?>
    <input type="submit" value="Buscar" />
</form>

