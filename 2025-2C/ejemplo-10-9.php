<?php

$consulta = "SELECT * FROM peliculas";

$conexion = mysqli_connect("localhost","root","root");
mysqli_select_db($conexion, "videoclub");

$resultado = mysqli_query($conexion,$consulta);
mysqli_close($conexion);
