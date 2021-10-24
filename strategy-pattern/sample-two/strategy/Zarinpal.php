<?php

require_once 'PaymentStrategy.php';

class Zarinpal implements PaymentStrategy {
    public function pay($amount = 0)
    {
        return 'paying ' . $amount .' by ZarinPal';
    }
}