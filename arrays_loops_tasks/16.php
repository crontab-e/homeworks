<?php
/**
 * Created by PhpStorm.
 * User: Андрей
 * Date: 12.10.2016
 * Time: 16:00
*/

$arr = array (1, 2, 3, 4, 5, 6, 7, 8, 9);

    foreach ($arr as $v){
        if ($counter > 2){
            echo "<br>";
            $counter = 0;
        }
        echo $v.", ";
        $counter++;
    }