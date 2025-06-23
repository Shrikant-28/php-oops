<?php 

/**
* Encapsulation - Definition: Encapsulation is the practice of hiding the internal state of an object and requiring all interaction to be performed through an object's methods.
*/

class BankAccount {
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

$account = new BankAccount();
$account->deposit(100);
echo $account->getBalance(); // Output: 100
// $account->balance = 1000; // Error: Cannot access private property
