<?php
$countries = array(
    'Mexico',
    'Spain',
    'Colombia',
    'France',
    'Sweden',
    'Argentina',
    'USA',
    'Israel'
);
// foreach($countries as $country){  --** Con este orden, ejecutaría la función
//     echo $country . '<br/>';      --** hasta que llegue a Spain incluida.
//     if($country == 'Colombia'){
//         break;
//     }
// }
// ;
// foreach($countries as $country){  //Con este orden, ejecutaría la función                                  //Una vez llegue a Spain, y pintaría el resto
//     if($country == 'Colombia'){        //enseñando los que están antes de Spain
//         break;
//     }
//     echo $country . '<br/>'; 
// }
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
    <h1>Latinoamerican Countries</h1>
    <?php
    foreach($countries as $country){ //Continue pide que se vuelva al inicio de la función
        if ($country == 'Spain' || $country == 'Israel'){//saltando esta vuelta del ciclo
            continue;
        }
            echo $country . '<br />';
    }
    ?>
</body>
</html>