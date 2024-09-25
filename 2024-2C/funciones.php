<?php

function validarUSuario($u,$p){
    if($u == "juan" AND md5($p) == "asdfsadfdsafwe3r34f4f34f")
        return true;

    return false;
}

function buscarResultados($s){
    //Conectarme a la DB
        //Consultar por esa palabra clave
    return [$s.rand(),$s.rand(),$s.rand(),$s.rand(),$s.rand()];
}