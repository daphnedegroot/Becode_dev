<?php

//for loop
for ($i = 0; $i < 10; $i++){
    echo $i . "  " . "Hello <br>";
}


//while loop
$age = 0;

while ($age < 5){
    echo "You are not old enough <br>";
    $age++;
}


$colors = ["Green", "Yellow", "Purple", "Blue", "Pink"];
//foreach loop only works for arrays
foreach ($colors as $color){
    echo $color . "<br>";
}