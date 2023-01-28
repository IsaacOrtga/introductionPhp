<?php
$month = 'February';
switch ($month) {
    case 'December';
        echo 'Merry Christmas';
        break;
    case 'January';
        echo 'Happy New Year';
        break;
    default:
        echo 'This month is not special';
        break;
}
if($month == 'December'){
    echo 'Merry Christmas';
}
else if($month == 'January'){
    echo 'Happy New Year';
}
else if($month == 'December'){
    echo 'This month is not special';
}

