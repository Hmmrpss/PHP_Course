<?php
if(isset($_GET['filter'])) {
    $delimiter = ($_GET['delimiter']);
    $names = (explode($delimiter, $_GET['names']));
    $ages = (explode($delimiter, $_GET['ages']));
    $result = [];

    for($i = 0; $i < count($names); $i++){
        $name = $names[$i];
        $age = $ages[$i];
        if(18<=$age){
        $result[$name] = $age;
        }
    }
}
include('RenderStudentsInfo_frontend.php');
