<?php

include_once "conexion.php";

$query = "SELECT * FROM clientes ORDER BY nombre ASC";

$resultado = consultaSql($query);
if(!empty($resultado)){
    ?>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Email</th>
            <th>-</th>
            <th>-</th>
        </tr>
        <?php
            $elementos = mysqli_fetch_assoc($resultado);

            foreach($elementos as $cliente){
                //echo $cliente["nombre"];
                echo "<tr>";
                    echo "<td>" . $cliente["nombre"] . "</td>";
                    echo "<td>" . $cliente["apellido"] . "</td>";
                    echo "<td>" . $cliente["email"] . "</td>";
                    echo "<td><a href='procesar.php?marcaid=".$cliente["id"]."'>MARCAR</a></td>";
                    echo "<td><a href='editar.php?clienteid=".$cliente["id"]."'>EDITAR</a></td>";
                echo "</tr>";
            }
        ?>
    </table>
    <?php
}

?>