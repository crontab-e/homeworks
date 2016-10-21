<pre>
<?php
/**
 * Created by PhpStorm.
 * User: Андрей
 * Date: 21.10.2016
 * Time: 12:40
 */

// $form_text = $_POST[my_text_area];

//print_r($form_text);

function checkTextLeght(){
    $form_text = preg_split("/\s/ ", $_POST[my_text_area]);
    $text_leght = array();

 //   print_r($form_text);
   foreach ($form_text as $v){
        $z = strlen($v);
        array_push($text_leght, $z);
       arsort($text_leght);
       array_keys ($text_leght);
   //    $text_leght = array_keys ($text_leght);
    }
//$sorted_array = array_combine($text_leght, $form_text);
arsort($text_leght);
$key_sort_array = array_keys ($text_leght);
$first_e = $key_sort_array[0];
$second_e = $key_sort_array[1];
$third_e = $key_sort_array[2];
//    print_r($text_leght)."<br>"; echo $first_e.PHP_EOL; echo $second_e.PHP_EOL; echo $third_e;
    $result = $form_text[$first_e].PHP_EOL.$form_text[$second_e].PHP_EOL.$form_text[$third_e];
    return $result;
}
echo checkTextLeght ();



?>
    </pre>
