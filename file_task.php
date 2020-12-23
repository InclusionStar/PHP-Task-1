<?php

$array = ["я", "крутой", "программист"];
$file = fopen("myFile.txt", 'w') or die("Не удалось открыть файл");
foreach($array as $val){
    fwrite($file, $val . "\n");
}
fclose($file);

$file = fopen("myFile.txt", 'r') or die("Не удалось открыть файл");
while(!feof($file)){
    echo fgets($file) . "</br>";
}
fclose($file);

?>