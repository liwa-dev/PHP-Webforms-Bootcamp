<?php
/**
 * Class for demo
 */
class Fruits {
    private $name;
    private $color;

    // Constructor
    function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }

    // Method to set name
    function set_name($name) {
        $this->name = $name;
    }

    // Method to get name
    function get_name() {
        return $this->name;
    }

    // New method to get color
    function get_color() {
        return $this->color;
    }

    // Destructor
    function __destruct() {
        echo "<br><p>The fruit is {$this->name} and the color is {$this->color}.</p>";
    }
}

// Creating a new Fruits object
$apple = new Fruits('Apple', 'Red');
// Getting the name
echo "Name: " . $apple->get_name() . "<br>";

// Getting the color
echo "Color: " . $apple->get_color();
?>