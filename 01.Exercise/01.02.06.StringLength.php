<?php
$input = trim(fgets(STDIN));;
$length = strlen($input);

switch($length){
    case ($length < 20) :
        echo $input;
        for ($i = 0; $i <= (20 - $length); $i++){ echo '*';}
        break;
    case ($length == 20) :
        echo $input;
        break;
    case ($length > 20) :
        echo substr($input, 0, 20);
        break;
}