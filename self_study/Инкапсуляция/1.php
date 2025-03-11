<?php

class BankAccount {
    private $accountNumber;
    private $balance;

    public function __construct($accountNumber, $balance = 0) {
        $this -> accountNumber = $accountNumber;
        $this -> balance = $balance;
    }

    public function deposit($amount) {
        if($amount > 0) {
            $this -> balance += $amount;
        }
    }

    public function withdraw($amount) {
        if($amount > 0 && $amount <= $this->balance) {
            $this -> balance -= $amount;
        }
    }

    public function getBalance() {
        return $this -> balance;
    }
}