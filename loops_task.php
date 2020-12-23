<?php

    echo "<h3>Нечётные числа с while</h3>";
    $i = 0;
    while($i <= 50){
        if ($i % 2 != 0){
            echo "$i ";
        }
        $i++;
    }

    echo "<h3>Нечётные числа с for</h3>";
    for($i = 0; $i <= 50; $i++){
        if ($i % 2 != 0){
            echo "$i ";
        }
    }

?>