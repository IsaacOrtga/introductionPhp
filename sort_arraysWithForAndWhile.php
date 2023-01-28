<?php
$months = array(
    'Enero', 'Febrero', 'Marzo', 'Abril',
    'Mayo', 'Junio', 'Julio', 'Agosto',
    'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
);
// for($i = 0; $i < count($months); $i++){
//     echo $months[$i] . '<br /> ';
// }
$counter = 0;
while($counter < count($months)){
    echo $months[$counter] . '<br />';
        $counter++;
}
?>