<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Задачи по массивам и циклам</title>
</head>
<body>
<pre>
<?php
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
    foreach ($arr as $k => $v){
        $en[] = $k;
        $ru[] = $v;
}
print_r($en);
print_r($ru);
?>


</pre>
</body>
</html>