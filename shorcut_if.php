<?php 
//isset() nos devuelve un valor o no si esta variable tiene un valor o no, como cuando en js sólo escribes el nombre de la var;
// $age = 18;
$age = 18;
$age = (isset($age)) ? $age : 'User has not established his age';
echo 'Edad: ' . $age;
?>
