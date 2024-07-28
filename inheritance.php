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
    public function message() {
        echo "Am I a fruit or a berry?";
        $this->intro();
    }
}

//create object
$strawberry = new Strawberry("Strawberry", "red");
$strawberry->message();
?>