<?php

// Abstract class

abstract class AbstractClass {
    abstract protected function getValue($name);

    public function great() {
        echo $this->getValue();
    }
}
?>