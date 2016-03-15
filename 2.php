<?php
/**
 * Created by PhpStorm.
 * User: chester
 * Date: 14.03.2016
 * Time: 22:38
 */

$result = 0;
$array = array(1, 20, 15, 17, 24, 35);
foreach ($array as $value) {
    $result += $value;
    }
echo "Сумма элементов массива равна $result";

//2. Дан массив с элементами 1, 20, 15, 17, 24, 35.
// С помощью цикла foreach найдите сумму элементов этого массива. Запишите ее в переменную $result.