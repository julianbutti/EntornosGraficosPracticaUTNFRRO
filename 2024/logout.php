<?php

session_start();

$_SESSION = [];
unset($_SESSION);

session_destroy();

header('Location: dashboard.php');
exit();

//die(header('Location: dashboard.php'));