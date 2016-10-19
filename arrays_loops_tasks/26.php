<pre>
<?php
/**
 * Created by PhpStorm.
 * User: Андрей
 * Date: 19.10.2016
 * Time: 14:53
 */
$rand_array = array (rand(0,99),rand(0,99),rand(0,99),rand(0,99),rand(0,99),rand(0,99),rand(0,99),rand(0,99));

print_r($rand_array).PHP_EOL;

foreach ($rand_array as $k => $v) {
    if ($k % 2 == 0 && $v > 0){
        $sum += $v;
    }
}
echo "Сумма всех не нулевых значений и всех значений с четным индексом равна ".$sum.PHP_EOL.PHP_EOL;

echo "Все значения масив с нечетным индексом и не равные нулю: ".PHP_EOL;
foreach ($rand_array as $k1 => $v1) {
    if ($k1 % 2 != 0 && $v1 > 0){

        echo "индекс = ".$k1." значение = ".$v1.PHP_EOL;
    }
}

?>
</pre>
