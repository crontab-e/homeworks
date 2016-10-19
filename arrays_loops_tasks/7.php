<?php
/**
 * Created by PhpStorm.
 * User: Андрей
 * Date: 12.10.2016
 * Time: 15:06
 */
$array = array (2, 5, 9, 15, 0, 4);
    foreach ($array as $v){
        if ($v > 3 && $v < 10)
            echo $v."<br>";
    }