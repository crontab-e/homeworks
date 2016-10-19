<pre>
<?php
/**
 * Created by PhpStorm.
 * User: Андрей
 * Date: 12.10.2016
 * Time: 20:56
*/

$rand_array = array (rand(1,99),rand(1,99),rand(1,99),rand(1,99),rand(1,99),rand(1,99),rand(1,99),rand(1,99));
echo "Начальный массив:".PHP_EOL;
print_r($rand_array);
$v_min = min($rand_array);
$v_max = max($rand_array);

echo "мин значение = ".$v_min.PHP_EOL;
echo "макс значение = ".$v_max.PHP_EOL.PHP_EOL;

foreach ($rand_array as $k =>$v) {
    if ($v_min == $v){
         $k_min = $k;
    }

}

foreach ($rand_array as $k2 =>$v2) {
    if ($v_max == $v2) {
    $k_max = $k2;
    }
}

list ($rand_array[$k_min], $rand_array[$k_max]) = array ($rand_array[$k_max], $rand_array[$k_min]);

echo "ключ от мин. значение = ".$k_min.PHP_EOL;
echo "ключ от макс. значение = ".$k_max.PHP_EOL.PHP_EOL;

echo "Массив после перестановки макс. и мин. значений местами:".PHP_EOL;
print_r($rand_array);

?>
</pre>
