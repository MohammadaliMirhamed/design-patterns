<?php

interface PaymentStrategy {
    public function pay($amount = 0);
}