<?php

session_start();

$_SESSION = [];
unset($_SESSION);

session_destroy();

header('Location: login.php');