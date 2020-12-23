<?php

function echoing($key, $array){
    return $array[$key] . " " . (array_key_exists($key, $array) ? "есть в массиве" : "Нет в массиве") . "</br>";
}

function firstLetterFilter($var){
    return strlen($var) > 10;
}

$films = [
    "мелодрама"=>"Великий Гэтсби", 
    "боевик"=>"Крепкий орешек", 
    "детектив"=>"Молчание ягнят", 
    "комедия"=>"Маска"
];


echo "<h3>Проверка на наличие значения</h3>";
$firstKey = "хип-хоп";
echo echoing($firstKey, $films);
$secondKey = "мелодрама";
echo echoing($secondKey, $films);

echo "<h3>Поиск ключа по значению</h3>";
$value_ToFind = "Крепкий орешек";
echo array_search($value_ToFind, $films);

echo "<h3>Поиск ключа по несуществующему значению</h3>";
$value_ToFind = "Мухтар и его команда";
var_dump(array_search($value_ToFind, $films));

echo "<h3>Фильтрация массива</h3>";
print_r(array_filter($films, "firstLetterFilter"));

echo "<h3>array_filter</h3>";
print_r(array_flip($films));

$array = [
    mt_rand(0, 100),
    mt_rand(0, 100),
    mt_rand(0, 100),
    mt_rand(0, 100),
    mt_rand(0, 100)
];

echo "<h3>Макс. и мин. значения</h3>";
print_r($array);
$max = max($array);
$max_index = array_search($max, $array);
echo "</br>" . "Макс. значение: " . $max . "</br>";
$min = min($array);
$min_index = array_search($min, $array);
echo "Мин. значение: " . $min . "</br>";

$temp = $array[$min_index];
$array[$min_index] = $array[$max_index];
$array[$max_index] = $temp;
print_r($array);


?>