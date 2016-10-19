<?php
/**
 * Created by PhpStorm.
 * User: Андрей
 * Date: 12.10.2016
 * Time: 15:26
 */
$n = 1000;
$num = 0;
while (true) {
    $num++;
    $n = $n / 2;    // $n /= 2;
    if ($n < 50){

    break;
}
}
echo "Число: ".$n."<br> Итераций: ".$num;