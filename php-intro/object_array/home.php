<?php

//object
class Person {

    public $name = "Daphne";
    public $age = 32;

    public function say_hello(){
        echo "My name is " . $this->name . " and i am " . $this->age . " years old!";
    }

    public function arr1(){
        //array
        $array1 = ["Daphne", "Jean", "Frans", "Ada"];
        print_r($array1);

        //add new item
        for ($i = 0; $i < 1; $i++){
            array_push($array1, "peter", "Samira");
            echo "<pre>";
            print_r($array1);
            echo "</pre>";
        }
    }

    public function arr2(){
        //associative array
        $array2 = array("Daphne" => 32,
            "Jean" => 35,
            "Frans" => 69,
            "Ada" => 63,
        );
        print_r($array2);
        echo "<br>";
        //remove last item from associative array
        array_pop($array2);
        print_r($array2);
    }

}

$person = new Person();
echo $person->say_hello() . "<br>";

echo $person->arr1() . "<br>";

echo $person->arr2();

//setcookie($person, "good", time()*3600, "/");