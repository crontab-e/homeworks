<pre>
<?php
/**
 * Created by PhpStorm.
 * User: Андрей
 * Date: 12.10.2016
 * Time: 20:08
*/
$BigNumber = 37957218373932;
$nember = 3;
$split_BigNumber_to_array = str_split($BigNumber);
$counter_from_box = array_count_values($split_BigNumber_to_array);

foreach ($counter_from_box as $k => $a){
    if ($k == $nember){
        echo "Количество вхождений числа "."$nember"." в число "."$BigNumber"." = ".$a.PHP_EOL;
    }
}
print_r($counter_from_box);
?>
</pre>
