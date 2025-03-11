<?php
class Payment {
    public function process() {
    }
}
class CreditCardPayment extends Payment {
    public function process() {
        print('Плачу кредиткартой');
    }
}
class PayPalPayment extends Payment {
    public function process() { 
        print('ПЛАЧУ PayPal');
    }
}
class BankTransferPayment extends Payment {
    public function process() { 
        print('ПЛАЧУ BankTransferPayment');
    }
}