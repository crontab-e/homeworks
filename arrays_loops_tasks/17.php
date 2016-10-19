<?php
/**
 * Created by PhpStorm.
 * User: Андрей
 * Date: 12.10.2016
 * Time: 16:14
 */
$arr = array ('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
    $month = date(F);
    foreach ($arr as $v){
        if ($v == $month){
            echo "<strong>".$v."</strong><br>";
        }
        else{
            echo $v."<br>";
        }

    }

