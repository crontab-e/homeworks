<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Test PHP</title>
</head>
<body>
<form action = "base-php.php" method="post">
    <input type="text" name="email">
    <input type="submit">
</form>
<pre>
<?php

print_r($_POST);

?>
    </pre>
</body>
</html>