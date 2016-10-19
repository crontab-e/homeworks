<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Test PHP</title>
</head>
<body>
<pre>
<?php





$a = 4;
function factorial($n)
{
    if ($n == 1 || $n == 0) {
        return 1;
    }

    return $n * $GLOBALS[a]/*factorial($n-1)*/;
    var_dump($GLOBALS);
}

echo factorial(4); // 1*2*3*4 = 24


/*
$flag = true;

$i = 2;
while ($i <= 100){
    for ($j = 2; $j < $i; $j++) {
        if ($i % $j == 0) {
            $flag = false;
            break;
        }
    }
    continue;
    $i++;

}

if($flag) echo $i.PHP_EOL;
$flag = true;
*/

?>
    </pre>
</body>
</html>