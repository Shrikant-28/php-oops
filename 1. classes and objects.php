<?php 

/**
* 1. Class and Object
* A class is a blueprint for objects. An object is an instance of a class.
*/

class Car {
    public $brand = "Toyota";

    public function honk() {
        echo "Beep beep!\n";
    }
}

$car1 = new Car();
echo $car1->brand; // Output: Toyota
$car1->honk();     // Output: Beep beep!
