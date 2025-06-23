<?php 
/**
* Inheritance - Definition: Inheritance allows a class (child) to inherit properties and methods from another class (parent), promoting code reuse.
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
