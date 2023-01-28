<?php
// $n1 = 10;
// $n2 = 6;
// $result = $n1 % $n2;
// echo $result;

// $n2 = 5;
// $n1 += 7;
// echo $n1;
// $n3 = 10; 
// if($n3 === 10) {
//     echo 'Hay igualdad estricta';
// }else {
//     echo 'No hay igualdad estricta';
// }
$number = 10;
++$number; //Poniéndo el incremento antes, va a recoger una unidad y luego sumarla al valor de la variable. 
//Si utilizo $number++, primero recoge el valor y luego añade uno, por lo que si hago un echo directo de esto, va a mostrarme el valor inicial porque es lo primero que lee
echo $number;

//Siempre se concatenan strings con el ., no con +
$text = 'Esto es un string';

$text2 = 'Esto es otro string';

echo $text3 = $text . $text2;
echo '<br />';
echo $text3 .= ' ' . $text2;
?>