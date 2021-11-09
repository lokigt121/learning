<?php
// Листинг 03.01
class ShopProduct{
    public $title = "Стандартный товар";
    public $producerMainName = "Лось";
    public $producerFirstName = "Дмитрий";
    public $price = 0;
    public function getProducer() {
        return $this->producerFirstName . " " . $this->producerMainName;
    }
}

//Листинг 03.02
$product1 = new ShopProduct();
print $product1->getProducer();
$product2 = new ShopProduct();
//$product1->title = "Собачье сердце";
//$product2->title = "Ревизор";
//print $product1->title;
//print $product2->title;
var_dump($product1);
var_dump($product2);
