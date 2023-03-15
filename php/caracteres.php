<?php

//Cantidad de caracteres segun la tarea
function cantidad_caracteres($texto){
    return 'Cantidad de caracteres: '. strlen($texto);
}

var_dump(cantidad_caracteres('as'));