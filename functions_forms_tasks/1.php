<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>1</title>
</head>
<body>
<form action="1.php" method="post">
<textarea row="30" cols="45" name="textarea1"></textarea>
<textarea row="30" cols="45" name="textarea2"></textarea>
    <input type="submit">
</form>
<pre>

    <?php

/**
 * @param string $a & $b textarea 1 and 2
 *
 * @return string
 */
function getCommonWords(){
    $a = explode(" ", $_POST['textarea1']);
    $b = explode(" ", $_POST['textarea2']);
    $result = array_intersect ($a, $b);
    $text_result = implode(",",$result);
    return $text_result;
}

echo getCommonWords();

?>

</pre>
</body>
</html>
