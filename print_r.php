<?php
$text = 'Carlos';
$numberInt = 10;
$numberString = '5';
$array = array('Carlos', 'Peter', 4);
$asociativeArray = array('Carlos', 'Peter', 5, array($age = 18, 'name' => 'Carlos', false));
$boolean = true;
print_r($asociativeArray); //A diferencia de var_dump, solo nos muestra el valor.
                //No nos dice el tipo de dato que es.
?>              