<?php 

/**
* Encapsulation - Definition: Encapsulation is the practice of hiding the internal state of an object and requiring all interaction to be performed through an object's methods.
* Encapsulation protects data using `private` or `protected` access modifiers and exposes it via `public`
*/

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

