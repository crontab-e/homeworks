<?php
/**
 * Created by PhpStorm.
 * User: Андрей
 * Date: 12.10.2016
 * Time: 16:53
*/

if (is_numeric($_POST['namber'])) {
    $namber = $_POST['namber'];
    $arr = str_split($namber);
    echo array_sum($arr);
}

else{
    echo "введите число";
}
