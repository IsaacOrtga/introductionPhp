<?php
$months = array(
    'Enero', 'Febrero', 'Marzo', 'Abril',
    'Mayo', 'Junio', 'Julio', 'Agosto',
    'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
);
$alex = array(
    'telephone' => '626145879',
    'age' => 25,
    'surname' => 'Artiles',
    'country' => 'Spain'
);
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
    <h1>Months</h1>

    <ul>
        <?php
        // foreach($months as $month){
        //     echo '<li>' . $month . '</li>';
        // }
            foreach($alex as $data => $value){
                echo '<li>' . $data . ' : ' . $value . '</li>';
                // foreach($variable as $key => $value){
                    // Un ciclo foreach dentro de otro 
                    // serviría para recorrer un arreglo dentro de otro arreglo
                // }
            }
        ?>
    </ul>

</body>

</html>