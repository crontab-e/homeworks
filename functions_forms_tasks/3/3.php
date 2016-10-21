<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>3</title>
</head>
<body>
<form method="post" action="3.php">
    <input type="text" name="wordLength" placeholder="Введите длинну слов" >
    <input type="submit" value="click">
</form>
<br>
<?php

$leght = $_POST[wordLength];
$text = file_get_contents('text.txt');

echo "Исходный текст выглядел так:<br>".$text.PHP_EOL."<hr>";

function TextParser($text)
{
    global $text;
    global $leght;
    $stack_L = array();

    $text_array = explode(" ", $text);
    foreach ($text_array as $v) {
        $wordLeght = mb_strlen($v);
             if ($wordLeght <= $leght) {
                 array_push($stack_L, $v);
        }
    }
    $result = implode(" ", $stack_L);
    return "Удалим все слова, большие чем ".$leght." символов:<br>".$result;
}

echo TextParser($text);

?>
</pre>
</body>
</html>