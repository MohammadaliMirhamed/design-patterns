<?php

require_once 'PaymentStrategy.php';

class Paypal implements PaymentStrategy {
    public function pay($amount = 0)
    {
        return 'paying ' . $amount .' by Paypal';
    }
}