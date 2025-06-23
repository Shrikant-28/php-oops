
# PHP OOP Concepts with Examples

## 1. Class and Object
A **class** is a blueprint for objects. An **object** is an instance of a class.

```php
class Car {
    public $brand = "Toyota";

    public function honk() {
        echo "Beep beep!\n";
    }
}

$car1 = new Car();
echo $car1->brand; // Output: Toyota
$car1->honk();     // Output: Beep beep!
```

---

## 2. Inheritance
One class can inherit the properties and methods of another using the `extends` keyword.

```php
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
```

---

## 3. Encapsulation
Encapsulation protects data using `private` or `protected` access modifiers and exposes it via public methods.

```php
class Account {
    private $balance = 0;

    public function deposit($amount) {
        if ($amount > 0) {
            $this->balance += $amount;
        }
    }

    public function getBalance() {
        return $this->balance;
    }
}

$account = new Account();
$account->deposit(500);
echo $account->getBalance(); // Output: 500
```

---

## 4. Polymorphism
Polymorphism allows different classes to implement the same method in their own way.

```php
class Animal {
    public function sound() {
        echo "Some sound\n";
    }
}

class Dog extends Animal {
    public function sound() {
        echo "Bark\n";
    }
}

class Cat extends Animal {
    public function sound() {
        echo "Meow\n";
    }
}

function makeSound(Animal $animal) {
    $animal->sound();
}

makeSound(new Dog()); // Output: Bark
makeSound(new Cat()); // Output: Meow
```

---

## 5. Abstraction
Abstract classes define methods that must be implemented by derived classes.

```php
abstract class Shape {
    abstract public function area();
}

class Circle extends Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function area() {
        return pi() * $this->radius * $this->radius;
    }
}

$circle = new Circle(5);
echo $circle->area(); // Output: 78.5398...
```

---

## 6. Interface
Interfaces define a contract that implementing classes must fulfill.

```php
interface Logger {
    public function log($message);
}

class FileLogger implements Logger {
    public function log($message) {
        echo "Logging to file: $message\n";
    }
}

$logger = new FileLogger();
$logger->log("Hello"); // Output: Logging to file: Hello
```

---

## 7. Traits
Traits allow you to reuse methods across multiple classes.

```php
trait LoggerTrait {
    public function log($msg) {
        echo "Log: $msg\n";
    }
}

class User {
    use LoggerTrait;
}

$user = new User();
$user->log("User created"); // Output: Log: User created
```
