<?php
$alex = array('telephone' => '626145879', 'age' => 25, 'surname' => 'Artiles', 'country' => 'Spain');
echo $alex['telephone'] . '<br />';
echo $alex['age'] . '<br />';
echo $alex['surname'] . '<br />';
echo $alex['country'] . '<br />';
$alex['telephone'] = '664458877';
echo 'El teléfono de Alex es: ' . $alex['telephone'];
?>