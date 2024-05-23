<?php
session_start();

if(!empty($_SESSION['MENSAJE'])){
    echo "<span class='error'>" . $_SESSION['MENSAJE'] . "</span>";
    $_SESSION['MENSAJE'] = "";
}