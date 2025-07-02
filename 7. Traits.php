<?php 

/**
* Traits: Traits allow you to reuse methods across multiple classes.
*/

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

#######################################################################

interface HelloInterface {
    public function sayHellow();
}

trait SayHello {
    public function sayHellow() {
        echo "Hi";
    }
}

class A implements HelloInterface {
    use SayHello;
    public function sayHellow() {
        echo "Hi, I am in A";
    }
}

class C implements HelloInterface {
    use SayHello;
}

function sayHello(HelloInterface $s){
    return $s->sayHellow();
}

$c = new C();
sayHello($c); // Output: Hi

$a = new A();
sayHello($a); // Output: Hi, I am in A

