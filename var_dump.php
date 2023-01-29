<?php
$text = 'Carlos';
$numberInt = 10;
$numberString = '5';
$array = array('Carlos', 'Peter', 4);
$asociativeArray = array('Carlos', 'Peter', 5, array($age = 18, false));
$boolean = true;
echo '<pre>';
var_dump($asociativeArray); //Nos muestra la información de la variable
echo '</pre>';              //Tanto el tipo de dato, su longitud, así como su valor
?>