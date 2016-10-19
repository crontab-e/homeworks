<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>27</title>
</head>
<body>
<?
$rows =  5;
$columns = 9;
$colors = array('red','yellow','blue','gray','maroon','brown','green');

echo "<table border='1'>".PHP_EOL;
for ($i = 0; $i < $rows; $i++) {
    echo "<tr>".PHP_EOL;
    for ($j = 0; $j < $columns; $j++) {
        echo "<td style='background-color:";
        $td_color = array_rand($colors);
        echo $colors[$td_color]."'".">";
        echo rand();
        echo "</td>".PHP_EOL;
    }
    echo "</tr>";
}
echo "</table>";
?>
</body>
</html>