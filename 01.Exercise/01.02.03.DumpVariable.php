<?php
$variable = trim(fgets(STDIN));

if (is_numeric($variable)){
    var_dump($variable);
}
else{
    echo gettype($variable);
}