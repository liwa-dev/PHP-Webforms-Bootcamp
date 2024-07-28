<?php
// Access Modifiers
// public, private, protected
// public - can be accessed from anywhere
// private - can only be accessed from within the class
// protected - can only be accessed from within the class and by inheriting classes

class Fruit {
    public $name;
    private $price;
    protected $color;

    //method
    function set_name($name) {
        return $this->name = $name;
    }

    private function set_price($price) {
        return $this->price = $price;
    }

    protected function set_color($color) {
        return $this->color = $color;
    }
}


$obj = new Fruit();
echo $obj->set_name('Apple');
echo $obj->set_price('10000');
echo $obj-> set_color('Red');
?>