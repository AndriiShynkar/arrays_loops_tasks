<?php


/* 22. Нарисуйте пирамиду, как показано на рисунке, воспользовавшись циклом for или while.<br><br>
    xx
    xxxx
    xxxxxx
    xxxxxxxx
    xxxxxxxxxx*/

$x = "";
for ($i = 0; $i <= 5; $i++) {
    while ($i <= 5) {
        echo "$x <br>";
        $x = $x . "xx";
        $i++;
    }

}


