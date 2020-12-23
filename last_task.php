<?php

$input_file = fopen("input.txt", 'r') or die("Не удалось открыть файл");

$m = (int)explode(' ', fgets($input_file))[1];

$count_votings = [];
for ($i = $m ; $i > 0; $i--)
    $count_votings[fgets($input_file)] += 1;
fclose($input_file);

$output_file = fopen("output.txt", 'w') or die("Не удалось открыть файл");
foreach ($count_votings as $val){
    fwrite($output_file, number_format($val / $m * 100, 2, ".", "") . "%\n");
}
fclose($output_file);

print_r($count_votings);

?>