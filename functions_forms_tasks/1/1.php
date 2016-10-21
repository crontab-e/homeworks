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
    $text_result = implode('<br>',$result);
    return $text_result;
}

echo getCommonWords();
