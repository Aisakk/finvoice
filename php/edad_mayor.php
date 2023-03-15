<?php

//Encontrar la persona mayor del array

$personas = array ("Juan" => 8, "Pérez" => 15, "Sebastian" => 5, "Hans" => 9, "Gabriel" => 7, "Rocío" => 5);
$getValueArray = max($personas);
$getKey = array_search($getValueArray, $personas);


var_dump('Persona mayor: '.$getKey.', edad: '.$getValueArray);

?>