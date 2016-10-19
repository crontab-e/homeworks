<?php
/**
 * Created by PhpStorm.
 * User: Андрей
 * Date: 19.10.2016
 * Time: 16:34
 */
echo "<table border='1'>".PHP_EOL;
for ($i=0; $i <= 9; $i++){
    echo "<tr>".PHP_EOL;
    for ($j=0; $j <= 9; $j++){
        echo "<td>";
        echo $i." x ".$j." = ".($i * $j);
        echo "</td>";
    }
    echo "</tr>";

}
echo "</table>";
