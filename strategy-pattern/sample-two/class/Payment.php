<?php

require_once "./strategy/PaymentStrategy.php";

Class Payment {
    
    private $payment;

    public function __construct(PaymentStrategy $payment)
    {
        $this->payment = $payment;
    }

    public function gotoGatway($payment_price)
    {
        return $this->payment->pay($payment_price);
    }    
}