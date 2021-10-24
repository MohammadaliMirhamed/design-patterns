<?php

class Product {

    private $products = [
        1000 => [
            'price' => 10000
        ],
        1001 => [
            'price' => 12000
        ],
        1002 => [
            'price' => 13000
        ],
        1003 => [
            'price' => 14000
        ],
        1004 => [
            'price' => 2000
        ],
    ];

    public function findPrice($items)
    {
        $sum = 0;
        foreach ($items as $item) {
            $sum = $sum + $this->products[$item]['price'];
        }

        return $sum;
    }
}