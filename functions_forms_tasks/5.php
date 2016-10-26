<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>5</title>
</head>
<body>
<form method="post" action="5.php">
    <input type="text" name="Pattern" placeholder="Введи максу поиска">
    <input type="submit" value="Искать">
</form>
<pre>

<?php
/**
 * Created by PhpStorm.
 * User: Андрей
 * Date: 26.10.2016
 * Time: 15:20
 */

$Dir = getcwd();
$Pattern = $_POST[Pattern];

function ShowDirPattern ($Dir, $Pattern)
{
    $result = print_r(glob($Pattern.'*'));
    return $result;
}

echo "Путь:".PHP_EOL.$Dir.PHP_EOL.PHP_EOL."Список файлов:".PHP_EOL;

ShowDirPattern($Dir, $Pattern);

?>

</pre>

</body>
</html>