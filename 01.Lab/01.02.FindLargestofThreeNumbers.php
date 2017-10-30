<?php

if(isset($_GET['compare'])) {
    $numberOne = intval($_GET['number_one']);
    $numberTwo = intval($_GET['number_two']);
    $numberThree = intval($_GET['number_three']);
    $result = '';

    echo "<ul>";
    $largestFromTwo = $numberOne; //max($numberOne, $numberTwo);
    if ($numberTwo > $numberOne) { //$largetNumber = max($largestFromTwo, $numberThree);
        $largestFromTwo = $numberTwo;
    } else{
        $result = $numberOne;
    }
    if ($numberThree > $largestFromTwo) {
        $result = $numberThree;
    } else {
        $result = $largestFromTwo;
    }
    echo "</ul>";
}
include('FindLargestNumber_frontend.php');