<?php
/**
 * Created by PhpStorm.
 * User: Андрей
 * Date: 12.10.2016
 * Time: 16:26
 */
$arr = array ('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
$saturday = "Saturday";
$sunday = "Sunday";
foreach ($arr as $v){
    if ($v == $saturday || $v == $sunday){
        echo "<strong>".$v."</strong><br>";
    }
    else{
        echo $v."<br>";
    }

}