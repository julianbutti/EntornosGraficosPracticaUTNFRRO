<?php
session_start();
setcookie("ejemplo".rand(), date('Y-m-d H:i:s'));
//VINCULO CLIENTE-SERVIDOR [Se guarda en cliente]

setcookie("ZPrimerAcceso", "VALOR");

echo "<pre>";
print_r($_COOKIE);

print_r($_SESSION);