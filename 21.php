<?php
/* 21. Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 9
    рядов, а не 5.
    1
    22
    333
    4444
    55555*/

$i = 1;
while ($i <= 9) {
    $num = 1;
    $line = "";
    while ($num <= $i){
        $line .= "$i";
        $num++;
    }
    echo "$line <br>";
    $i++;
}


