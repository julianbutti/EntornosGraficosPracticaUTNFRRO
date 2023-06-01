<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'password');
define('DB_NAME', 'test');

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if(mysqli_connect_errno()) {
  exit("Database connection failed: (" . mysqli_connect_errno() . ")");
}

$sql = "SELECT * FROM peliculas";
$results = mysqli_query($connection, $sql);
if (!$results) {
  exit("Database query failed.");
}

$count = mysqli_num_rows($results);
/*
$quotes = [];
for ($i = 0; $i < $count; $i++) {
  $row = mysqli_fetch_assoc($results);
  $quotes[] = $row["txt"];
}
*/
while($pelicula = mysqli_fetch_array($results)){
  echo "El id de la pelicula es: ";
  echo $pelicula['id'];
  echo " y se llama: " . $pelicula['nombre'];
  echo "<br />";
}
//El id de la pelicula es: 1 y se llama: El silencio de los Inocentes
//El id de la pelicula es: 2 y se llama: La mascara

mysqli_free_result($results);
mysqli_close($connection);
