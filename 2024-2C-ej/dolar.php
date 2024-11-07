<?php

$opts = array('http' => array('header' => "User-Agent:Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:132.0) Gecko/20100101 Firefox/132.0\r\n"));
$context = stream_context_create($opts);
$mystring = file_get_contents('https://dolarhoy.com/cotizaciondolaroficial', FALSE, $context);

$findme = '<div class="topic">Venta</div>';
$pos = strpos($mystring, $findme);


$cotizacion = substr($mystring ,$pos+50,6);
$cotizacion = floatval(str_replace(",", ".", $cotizacion));