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
