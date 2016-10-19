<?php
/**
 * Created by PhpStorm.
 * User: Андрей
 * Date: 12.10.2016
 * Time: 16:51
 */
$variable = 'x';
for ($i = 0; $i <= 5; $i++) {
    for ($j = 0; $j < $i; $j++) {
        echo $variable.$variable;
    }
    echo "<br>";
}