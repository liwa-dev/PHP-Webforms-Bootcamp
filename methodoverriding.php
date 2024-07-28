<?php
// Inheritance

class Fruit {
    public $name;
    public $color;

    //default method
    public function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }

    //method
    public function intro() {
        echo "The fruit is {$this->name} and the color is {$this->color}.";
    }
}

//child class
class Strawberry extends Fruit {
    public $price;
    public function __construct($name, $color, $price) {
        $this->name = $name;
        $this->color = $color;
        $this->price = $price;
    }
    //method
    public function intro() {
        echo "The fruit is {$this->name} and the color is {$this->color} and the price is {$this->price}.";
    }
}

//create object
$strawberry = new Fruit("Strawberry", "red", 100);
$strawberry->intro();
?>