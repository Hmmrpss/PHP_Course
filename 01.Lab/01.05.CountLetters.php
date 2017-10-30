<?php
if(isset($_GET['count_letters'])) {
    $line = ($_GET['input_text']);
    $letters = array();

    for ($i = 0; $i < strlen($line); $i++) {
        $letter = $line[$i];
        if (!isset($letters[$letter])) {
            $letters[$letter] = 1;
        } else {
            $letters[$letter]++;
        }
    }
    $result = print_r($letters);
}
include('LetterCounter_frontend.php');