<?php

function searchByCondition($array, $condition){
    $new_array = [];
    foreach($array as $val){
        if ($condition($val)){
            $new_array[] = $val;
        }
    }

    return $new_array;
}

$array1 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$array2 = [0, 13, 12, 100, 99, 9];
$array3 = [3, 4, 5, 6, 12];
$condition = function($var){
    return $var % 3 == 0;
};

print_r(searchByCondition($array1, $condition));
echo "</br>";
print_r(searchByCondition($array2, $condition));
echo "</br>";
print_r(searchByCondition($array3, $condition));


?>