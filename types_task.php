<?php

$array = [
    "Пустая строка" => "", "0 число" => 0, "Null" => Null, 
    "0 строка" => "0", "Пустой массив" => [], "Тру" => true, 
    "Фолс" => false, "1 число" => 1, "1 строка" => "1", 
    "-1 число" => -1, "-1 строка" => "-1"
];


$looselyEqualOperator = function($fvalue, $svalue){
    return $fvalue == $svalue;
};
$strictIdenticalOperator = function($fvalue, $svalue){
    return $fvalue === $svalue;
};

function printEqualityTable($array, $operator){
    echo "<table>";
    
    echo "<tr>";
    echo "<td></td>";
    foreach ($array as $key=>$value){
        echo "<td>$key</td>";
    }
    echo "</tr>";

    foreach ($array as $fkey=>$fvalue){
        echo "<tr><td>$fkey</td>";
        foreach ($array as $skey=>$svalue){
            echo "<td style=\"border: 1px solid black;\">", $operator($fvalue, $svalue), "</td>";
        }
        echo "</tr>";
    }

    echo "</table>";
}

echo "<h3>Обычное равенство</h3>";
printEqualityTable($array, $looselyEqualOperator);
echo "<h3>Тождественное равенство</h3>";
printEqualityTable($array, $strictIdenticalOperator);

?>