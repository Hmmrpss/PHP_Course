<?php
$firstNumber = trim(fgets(STDIN));
$secondNumber = trim(fgets(STDIN));

if ($secondNumber < $firstNumber) {
   $temp = $firstNumber;
   $firstNumber = $secondNumber;
   $secondNumber = $temp;
}

for ($i = $firstNumber; $i <= $secondNumber; $i++) {
    echo $i . PHP_EOL;
}