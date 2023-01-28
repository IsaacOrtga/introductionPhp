<?php
$months = array(
    'Enero', 'Febrero', 'Marzo', 'Abril',
    'Mayo', 'Junio', 'Julio', 'Agosto',
    'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
);
$numbers = array(1, 22, 33, 54, 2, 7, 4, 34, 12);
// sort($months);
// rsort($months);
rsort($numbers);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Meses del año</h1>
    <ul>
        <?php 
        foreach($numbers as $number){
            echo '<li>' . $number . '</li>';
        }
        ?>
    </ul>
</body>

</html>