<?php

include_once "ciudades-logica.php";

if(!empty($_SESSION['mensaje'])){
    echo '<strong>'.$_SESSION['mensaje'].'</strong><br />';
    unset($_SESSION['mensaje']);
}

$_SESSION['fecha']['registro'][] = date('Y-m-d H:i:s');
$_SESSION['fecha']['registro'][] = date('Y-m-d H:i:s') . rand();
$_SESSION['fecha']['registro'][] = date('Y-m-d H:i:s') . rand();
$_SESSION['fecha']['registro'][] = date('Y-m-d H:i:s') . rand();
$_SESSION['fecha']['test'][] = date('Y-m-d H:i:s') . rand();
/*
Array ( 'fecha' =>  
        Array(
            'registro' =>
                Array ( 
                    0 => '2023-06-21 21:23:23',  
                    1 => '2023-06-21 21:23:23 324234',
                    2 => '2023-06-21 21:23:23 345345',
                    3 => '2023-06-21 21:23:23 534634'
                )
            ,
            'test' =>
                Array ( 
                    0 => '2023-06-21 21:23:23 345678'
                )
        )
    )
*/
?>
<!-- Formulario para editar Ciudad -->
<?php if(!empty($_GET['editarid'])): ?>
    <div id="editar" class="">
        <h3>Editar ciudad</h3>
        <form method="post" action="ciudades.php">
            <input type="hidden" name="accion" value="editar" />
            <input type="hidden" name="id" value="<?php echo $ciudad_a_editar["id"]; ?>" />
            Nombre: <input type="text" value="<?php echo $ciudad_a_editar["nombre"]; ?>" name="nombre" placeholder="Ingrese nombre de ciudad" required />
            <br />
            <input type="submit" value="Guardar cambios" />
        </form>
    </div>
<?php else: ?>
    <!-- Formulario para nueva Ciudad -->
    <div id="alta" class="">
        <h3>Nueva ciudad</h3>
        <form method="post" action="ciudades.php">
            <input type="hidden" name="accion" value="nuevo" />
            Nombre: <input type="text" name="nombre" placeholder="Ingrese nombre de ciudad" required />
            <br />
            <input type="submit" value="Guardar" />
        </form>
    </div>
<?php endif; ?>

<!-- Mostrar listado -->
<div id="listado" class="">
    <h3>Ciudades</h3>
    <?php
        if(!empty($listado)){
            //Recorrer
            echo '<table>';
                echo '<tr><td>ID</td><td>Nombre</td><td>Eliminar</td><td>Editar</td></tr>';
                while($ciudad = mysqli_fetch_array($listado)){
                    //echo "ID: " . $ciudad["id"];
                    //echo " - Nombre: " . $ciudad["nombre"];
                    //echo "<br />";
                    echo '<tr>
                        <td>'.$ciudad["id"].'</td>
                        <td>'.$ciudad["nombre"].'</td>
                        <td><a href="ciudades.php?eliminarid='.$ciudad["id"].'">X - Eliminar</a></td>
                        <td><a href="ciudades.php?editarid='.$ciudad["id"].'">Editar</a></td>
                    </tr>';
                }
            echo '</table>';
        }else{
            echo 'No hay ciudades cargadas...';
        }
    ?>
</div>

<!-- Mostrar listado -->
<div id="listado" class="">
    <h3>Ciudades</h3>
    <?php
        if(!empty($listado)){
            ?>
            <table>
                <tr>
                    <td>ID</td>
                    <td>Nombre</td>
                    <td>Eliminar</td>
                    <td>Editar</td>
                </tr>
                <?php
                while($ciudad = mysqli_fetch_array($listado)){
                    ?>
                    <tr>
                        <td><?= $ciudad["id"] ?></td>
                        <td><?= $ciudad["nombre"] ?></td>
                        <td><a href="ciudades.php?eliminarid=<?= $ciudad['id'] ?>">X - Eliminar</a></td>
                        <td><a href="ciudades.php?editarid= <?= $ciudad['id'] ?>">Editar</a></td>
                    </tr>
                    <?php
                }
                ?>
            </table>
            <?php
        }else{
            echo 'No hay ciudades cargadas...';
        }

        /*
        
            <?=
            
            equivalente

            <?php echo

        */
    ?>
</div>