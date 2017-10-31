<?php
//read the input and the required parameters
$input = trim(fgets(STDIN));
$request = fgets(STDIN);
$char = $request[0];
$occurrence = intval($request[1]);
//set variables for the index we are looking for and the count of the occurrences of the letter so far
$index = 0;
$count = 0;

//traverse the string and look for the letter
for($i = 0; $i < strlen($input); $i++){
    $currentChar = $input[$i];
    //if you find it, increase it's count
    if ($currentChar === $char){
        $count++;
        //if it matches the one in the request get it's index and stop
        if($count === $occurrence){
            $index = $i;
            break;
        }
    }
    //if not continue
}

//if you found the index of the letter with given occurrence print it out
if($index != 0){
    echo $index;
}
//if not...
else{
    echo "Find the letter yourself!";
}