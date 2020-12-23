<?php

$string = "inclusion_star@mail.ru";
$symbol = "@";

if (stripos($string, $symbol)){
    echo "Символ '@' есть в строке {$string}";
}
else{
    echo "Символа '@' нет в строке {$string}";
}


echo "<p>Поиск домена</p>";
echo substr($string, stripos($string, $symbol) + 1) . "</br>";
echo explode("@", $string)[1];


echo "<p>Склейка массива строк</p>";
$array_of_string = ['z', 'rhenjq', 'ghjuhfvvbcn'];

$new_string1 = "";
for ($i = 0; $i < count($array_of_string); $i++){
    $new_string1 .= $array_of_string[$i];
}
echo $new_string1 . "</br>";

$new_string2 = "";
foreach ($array_of_string as $val){
    $new_string2 .= $val;
}
echo $new_string2 . "</br>";

echo implode($array_of_string) . "</br>";


echo "<p>Массив чисел</p>";
$array_of_numbers = [12, 1, 0, 0.2351, 1.2, 134.126, 123145, 0.00001, 0.02];
foreach ($array_of_numbers as &$val){
    $val = number_format(round($val, 2), 2, ".", "");
}
print_r($array_of_numbers);


?>