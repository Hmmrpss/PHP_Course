<?php

if(isset($_GET['calculate'])){
    $numberOne = intval($_GET['number_one']);
    $numberTwo = intval($_GET['number_two']);
    $operation = $_GET['operation'];
    $result = "";

    echo "<ul>";
    if ( $operation == 'sum'){
        $result = $numberOne + $numberTwo;
    }else if( $operation == 'subtract'){
        $result = $numberOne - $numberTwo;
    }else{
        $result = 'Invalid operation supplied!';
    }
    echo "</ul>";
}
include 'calculator_frontend.php';
