<?php
// if(condition){
//     //Instructions
// }
$age = 18;
$name = 'Carlos';
if($age >= 18 && $name == 'Carlos'){
    echo '<h1> Bienvenido </h1>';
}
if($age < 18 XOR $name != 'Carlos'){ /*XOR check if only one of the options is true
    If they are all true, they don`t pass*/
    echo '<h1>Eres menor de edad </h1>';
}

?>