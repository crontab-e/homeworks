<?php

function checkTextLeght(){
    $form_text = preg_split("/\s/ ", $_POST[my_text_area]);
    $text_leght = array();

   foreach ($form_text as $v){
       $LeightCounter = strlen($v);
       array_push($text_leght, $LeightCounter); // пушим длинну элементов массива $form_text в новый масив $text_leght
       arsort($text_leght); // сортировка массива с длинной слов по убыванию с сохранением ключей
    }

    $key_sort_array = array_keys ($text_leght); // забирает ключи из $text_leght и ложит их в $key_sort_array

    $first_e = $key_sort_array[0];
    $second_e = $key_sort_array[1];
    $third_e = $key_sort_array[2];

    $result = $form_text[$first_e].PHP_EOL.$form_text[$second_e].PHP_EOL.$form_text[$third_e];

    return $result;
}
echo checkTextLeght ();
