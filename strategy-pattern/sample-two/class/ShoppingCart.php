<?php 

require_once 'Product.php';

class ShoppingCart {
    
    private $items = [];
    private $products;

    public function __construct(Product $products)
    {
        $this->products = $products;
    }
    
    public function addItem(int $item)
    {
        $this->items[] = $item;
    }
    
    public function removeItem() : bool
    {
        unset($this->items[0]);

        return true;
    }
    
    public function listItems() : array
    {
        return $this->items;
    }

    public function getFinalPrice() : int
    {
        return $this->products->findPrice($this->items);
    }

}
