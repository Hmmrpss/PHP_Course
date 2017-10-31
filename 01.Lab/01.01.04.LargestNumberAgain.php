<?php
//First Way
$largest = -999999999;
while($number = intval(fgets(STDIN))){
    if ($number  > $largest){ //$largest = max($largest, $number);
        $largest =  $number;
    }
}
echo "Max: $largest";
?>

<?php
//Second Way
$numbers = [];
while($number = intval(fgets(STDIN))){
    $numbers [] = $number;
}
echo "Max: " . max($numbers);
?>

