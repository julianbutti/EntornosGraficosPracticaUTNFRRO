<?php

include_once "funciones.php";

if(!empty($_POST['nombre']) AND !empty($_POST['estudio'])){
    $nombre = $_POST['nombre'];
    $estudio = $_POST['estudio'];
    $director = $_POST['director'];

    consultaSQL("INSERT INTO peliculas (nombre, estudio, director_id) VALUES ('$nombre', '$estudio', $director)");
}

$resultados = consultaSQL("SELECT p.id,p.nombre as title, p.estudio, d.nombre, d.apellido FROM peliculas p LEFT JOIN directores d ON p.director_id = d.id ORDER BY title ASC; ");

$resultados_directores = consultaSQL("SELECT * FROM directores;");


if(!empty($resultados)){

    echo "<table border='1' style='width:100%'>";
    echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>Título</th>";
        echo "<th>Estudio</th>";
        echo "<th>Director</th>";
        echo "<th>Acciones</th>";
    echo "</tr>";

    while ($row = mysqli_fetch_assoc($resultados)) {
        echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['title'] . "</td>";
            echo "<td>" . $row['estudio'] . "</td>";
            echo "<td>" . $row['nombre'] . " " . $row['apellido'] . "</td>";
            echo "<td>";
                echo "<a href='editar.php?id=" . $row['id'] . "'>Editar</a> | ";
                echo "<a href='eliminar.php?id=" . $row['id'] . "'>Eliminar</a>";
            echo "</td>";
        echo "</tr>";
    }

    echo "</table>";

}
?>

<br /><hr /><br /><br />
<form action="" method="post">
    Nueva pelicula:
    <input type="text" name="nombre" placeholder="Ingrese el nombre" /><br />
    <input type="text" name="estudio" placeholder="Ingrese el estudio" /><br />
    <?php

    if(!empty($resultados_directores)){
        echo "<select name='director'><option>Seleccione un director</option>";
        while ($row = mysqli_fetch_assoc($resultados_directores)) {
            echo "<option value='" . $row['id'] . "'>" . $row['nombre'] . " " . $row['apellido'] . "</option>";
        }
        echo "</select>";
    }

    ?>

    <input type="submit" value="Agregar pelicula" />
</form>