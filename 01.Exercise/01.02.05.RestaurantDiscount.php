<?php
$peopleCount = intval(fgets(STDIN));
$package = trim(fgets(STDIN));;
$hallName = '';

switch($peopleCount){
    case ($peopleCount<=50): $hallName = 'Small Hall'; break;
    case (50<$peopleCount && $peopleCount<=100) : $hallName = 'Terrace'; break;
    case (100<$peopleCount && $peopleCount<=120) : $hallName = 'Great Hall'; break;
    case (150<=$peopleCount) : echo 'We do not have an appropriate hall.'; exit; break;
}

$priceForHall = 0;
switch($hallName){
    case 'Small Hall': $priceForHall=2500; break;
    case 'Terrace': $priceForHall=5000; break;
    case 'Great Hall': $priceForHall=7500; break;
}

$discount = 0;
$priceForPackage = 0;
switch($package){
    case 'Normal': $discount=0.05; $priceForPackage = 500; break;
    case 'Gold': $discount=0.1; $priceForPackage = 750; break;
    case 'Platinum': $discount=0.15; $priceForPackage = 1000; break;
}

$discountValue = (($priceForHall + $priceForPackage)*$discount);
$totalPrice = ($priceForHall + $priceForPackage) - $discountValue;
$pricePerPerson = $totalPrice / $peopleCount;

echo "We can offer you the {$hallName}" . PHP_EOL;
echo "The price per person is " . round($pricePerPerson, 2) . "$";