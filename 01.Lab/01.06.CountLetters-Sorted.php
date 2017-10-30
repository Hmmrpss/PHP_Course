<?php
if(isset($_GET['count_letters'])) {
    $line = ($_GET['input_text']);
    $letters = array();
    for ($i = 0; $i < strlen($line); $i++) {
        $letter = $line[$i];
        if (!isset($letters[$letter])) {
            $letters[$letter] = 1;
        } else {
            $letters[$letter] += 1;
        }
    }
    arsort($letters);
    $result = print_r($letters);
}
include('LetterCounter_frontend.php');

/*
//sorted by keys ascending
ksort($letters);
foreach ($letters as $key => $value) {
    echo "$key -> $value <br/>";
}
//keys descending == krsort();

//sorted by values descending
arsort($letters);
foreach ($letters as $key => $value) {
    echo "$key -> $value <br/>";
}
//values ascending == asort();

////sorted first by values desc, then by keys asc
$values = array_values($letters);
$keys = array_keys($letters);
array_multisort($values, SORT_DESC, $keys, SORT_ASC, $letters);
foreach ($letters as $key => $value) {
    echo "$key -> $value <br/>";
}
*/