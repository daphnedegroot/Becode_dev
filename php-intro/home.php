<?php
session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<a href="game.php">Play Blackjack</a>
</body>
</html>

<?php
//object
class Person {

    public $name = "Daphne";
    public $age = 32;

    public function say_hello(){
        echo "My name is " . $this->name . " and i am " . $this->age . " years old!";
    }
}

//echo "<pre>";
//print_r($array1);
//echo "</pre>";
//
//echo "<pre>";
//print_r($array2);
//echo "</pre>";

$person = new Person();
echo $person->say_hello();


//sessions

function save_session(){

    //array
    $array1 = ["Daphne", "Jean", "Frans", "Ada"];

    //associative array
    $array2 = array("Daphne" => 32,
        "Jean" => 35,
        "Frans" => 69,
        "Ada" => 63,
        );
    $array2['Peter'] = 40 . $array2['Samira'] = 38;

    $_SESSION['names'] = $array1;
    $_SESSION['person'] = $array2;

    for ($i = 0; $i < 1; $i++){
        array_push($array1, "peter", "Samira");
        echo "<pre>";
        print_r($array1);
        echo "</pre>";
    }

    foreach ($array2 as $key => $value){
        echo "My name is " . $key . " and i am " . $value . " years old!<br>";
    }
}


echo save_session();

