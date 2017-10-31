<?php
//First Way
$maxNumber = PHP_INT_MIN;
while(true){
    $line = trim(fgets(STDIN));
    if(empty($line)){
        break;
    }
    if(intval($line) > $maxNumber){
        $maxNumber = intval($input);
    }
}
echo "Max Number: ". $maxNumber;
?>

<?php
//Second Way
$numbers = [];
while($number = intval(fgets(STDN))){
$numbers [] = $number;
}
echo "Max: " . max($numbers);
?>

<?php
//Third Way
$largest = 0;
while($number = intval(fgets(STDIN))){
    if ($number  > $largest){ //$largest = max($largest, $number);
        $largest =  $number;
    }
}
echo "Max: $largest";
?>

