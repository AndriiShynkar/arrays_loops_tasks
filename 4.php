<?php
/**
 * Created by PhpStorm.
 * User: chester
 * Date: 15.03.2016
 * Time: 0:18
 */
/*4. Дан массив $arr. С помощью первого цикла foreach выведите на экран столбец ключей,
с помощью второго — столбец элементов.
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');*/

$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');


    foreach ($arr as $key => $value) {
        echo "$key <br> \n";

            }
echo "<br>";
foreach ($arr as $key => $value) {
       echo "$value <br> \n";

}
