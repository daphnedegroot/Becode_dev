<?php

//class Product {
//    public $title= "Harry Potter";
//function __construct($title){
//    $this->title = $title;
//}
//function getTitle(){
//    return $this->title;
//} //Returns the title
//}
//$p = new Product("Lord of the Rings");
//echo $p->getTitle(); //Returns which title?

class Car {
    public $brand;
    public $color;

    function __construct($brand, $color)
    {
        $this->brand = $brand;
        $this->color = $color;
    }

    function getBrand() {
        return $this->brand;
    }

    function getColor(){
        return $this->color;
    }
}

//$car = new Car('Volvo', 'Red');
//echo $car->getBrand() . " " . $car->getColor();

class Electric extends Car {
    public $volt;

    function __construct($brand, $color, $volt)
    {
        parent::__construct($brand, $color);
        $this->volt = $volt;
    }

    function getVolt(){
        return $this->volt;
    }
}

$car = new Electric('Renault Zoe', 'Black', '120V');
echo $car->getBrand() . " " . $car->getColor() . " " . $car->getVolt();

