<?php
/**
 *
 *Created by PhpStorm.
 * User: chester
 * Date: 14.03.2016
 * Time: 23:46
 */
//Дан массив с элементами 26, 17, 136, 12, 79, 15.
//С помощью цикла foreach найдите сумму квадратов элементов этого массива. Результат (26071) запишите переменную $result.

$array = array(26, 17, 136, 12, 79, 15);
$result = 0;
foreach ($array as $value) {
    $sqw= pow($value, 2);
    $result += $sqw;
    }
echo "Сумма элементов массива равна $result";
