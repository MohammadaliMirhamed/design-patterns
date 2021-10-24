<?php

require_once 'class/Product.php';
require_once 'class/ShoppingCart.php';
require_once 'class/payment.php';

require_once 'strategy/Paypal.php';
require_once 'strategy/Payping.php';
require_once 'strategy/Zarinpal.php';

$products = new Product;
$cart = new ShoppingCart($products);

// $cart->addItem(1000); // pen
// $cart->addItem(1001); // coat
$cart->addItem(1004); // hat

if($cart->getFinalPrice() > 10000 && $cart->getFinalPrice() < 20000) {
    $paypal = new Paypal;
    $payment = new Payment($paypal);
} else if($cart->getFinalPrice() > 20000) {
    $zarinpal = new Zarinpal;
    $payment = new Payment($zarinpal);
} else {
    $payping = new Payping;
    $payment = new Payment($payping);
}

echo $payment->gotoGatway($cart->getFinalPrice());
    