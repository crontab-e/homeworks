<?php
/**
 * Created by PhpStorm.
 * User: Андрей
 * Date: 12.10.2016
 * Time: 16:30
 */
$arr = array ('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
$day = date(l);
foreach ($arr as $v){
    if ($v == $day){
        echo "<strong>".$v."</strong><br>";
    }
    else{
        echo $v."<br>";
    }

}