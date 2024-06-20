<?php


function consultaSql($sql){
    
    $link = mysqli_connect("localhost","root","","db") or die('Error');

    $result = mysqli_query($link, $sql);

    mysqli_close($link);
    
    return $result;
}


?>