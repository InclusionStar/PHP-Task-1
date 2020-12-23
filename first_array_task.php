<?php

    function bubbleSort($array){
        for($i = 0; $i < count($array); $i++){
            for($j = $i + 1; $j < count($array); $j++){
                if($array[$i] > $array[$j]){
                    $temp = $array[$i];
                    $array[$i] = $array[$j];
                    $array[$j] = $temp;
                }
            }
        }

        return $array;
    }

    echo "<h3>Первый вектор</h3>";
    $array = [2, 4, 10, 5, 3, 6, 1, 7, 8, 9];
    print_r($array);

    echo "<h3>Сортировка пузырьком</h3>";
    $bubble_sorted_array = bubbleSort($array);
    print_r($bubble_sorted_array);

    echo "<h3>Встроенная в PHP сортировка</h3>";
    sort($array);
    print_r($array);

    echo "<h3>Второй вектор</h3>";
    $array2 = array_fill(1, 3, 999);
    print_r($array2);

    echo "<h3>Слияние двух массивов</h3>";
    $array3 = array_merge($array, $array2);
    print_r($array3);

?>