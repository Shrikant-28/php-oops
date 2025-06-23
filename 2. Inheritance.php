<?php 
/**
* Inheritance - Definition: Inheritance allows a class (child) to inherit properties and methods from another class (parent), promoting code reuse.
* One class can inherit the properties and methods of another using the `extends` keyword.
*/

class Animal {
    public function makeSound() {
        echo "Some generic sound\n";
    }
}

class Dog extends Animal {
    public function makeSound() {
        echo "Bark\n";
    }
}

$dog = new Dog();
$dog->makeSound(); // Output: Bark

/******************************************************/

class Vehicle {
    public function move() {
        echo "Vehicle is moving\n";
    }
}

class Bike extends Vehicle {
    public function ringBell() {
        echo "Ring ring!\n";
    }
}

$bike = new Bike();
$bike->move();     // Output: Vehicle is moving
$bike->ringBell(); // Output: Ring ring!
