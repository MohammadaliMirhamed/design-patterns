<?php

require_once 'PaymentStrategy.php';

class Payping implements PaymentStrategy {
    public function pay($amount = 0)
    {
        return 'paying ' . $amount .' by Payping';
    }
}