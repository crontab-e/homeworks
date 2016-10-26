<pre>
<?php

$Dir = getcwd();

function ShowDIR ($Dir)
{
    $result = scandir ($Dir);
    return print_r($result);
}

echo "Выведем список файлов и папкок для:<br>".$Dir.PHP_EOL;
echo ShowDIR($Dir);

?>
</pre>
