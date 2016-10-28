<pre>
<?php
/**
 * Created by PhpStorm.
 * User: Андрей
 * Date: 26.10.2016
 * Time: 16:52
*/

$UploadDir = getcwd()."\gallery\/";

function SaveFilesToGallary ($UploadDir)
{
    foreach ($_FILES['UploadFile']['tmp_name'] as $id => $temp_file_name) {
      //  $temp_name = $temp_file_name;
        $name = $_FILES['UploadFile']['name'][$id];
        move_uploaded_file($temp_file_name, $UploadDir . basename($name));
    }
}


function ShowIMGfromGallary()
{
    $GoTo = 'gallery';
    $ChangeDIR = chdir ($GoTo);
    foreach (glob('*') as $filenames) {
        $result = "<img src=".$GoTo."/".$filenames."><br>";
        echo $result;
    }


}

SaveFilesToGallary($UploadDir);
ShowIMGfromGallary();

?>
</pre>