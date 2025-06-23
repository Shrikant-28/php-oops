<?php 
/**
* POLYMORPHISM - 
* Definition: Polymorphism allows different classes to define methods with the same name but different behaviors.
* Polymorphism allows different classes to implement the same method in their own way.
*/

class Animal {
    public function makeSound(){
        echo "Animal sound\n";
    }
}

class Dog extends Animal {
     public function makeSound(){
        echo "bhao\n";
    }
}

class Cat extends Animal {
     public function makeSound(){
        echo "Meow\n";
    }
}

function animalSound(Animal $animal){
    $animal->makeSound();
}

animalSound(new Dog());    // bhao 
animalSound(new Cat());    // Meow
