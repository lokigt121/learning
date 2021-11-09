<?php
// Листинг 03.01
class ShopProduct
{
    public $title;
    public $producerMainName;
    public $producerFirstName;
    public $price;

    public function __construct(
        string $title,
        string $producerMainName,
        string $producerFirstName,
        float $price
    ) {
        $this->title = $title;
        $this->producerMainName = $producerMainName;
        $this->producerFirstName = $producerFirstName;
        $this->price = $price;
      }

    public function getProducer() {
        return $this->producerFirstName . " " . $this->producerMainName;
    }
}
$product1 = new ShopProduct("Строка", "True", "123", "123"/*[]*/);
var_dump($product1);

//Листинг 03.02
//$product1 = new ShopProduct(
//    "Обучение",
//    "Лось",
//    "Дмитрий",
//    10
//);
//print "Товар: $product1->title <br> Автор: {$product1->getProducer()} ";
//$product1->title = "Обучение";
//$product1->producerMainName = "Лось";
//$product1->producerFirstName = "Дмитрий";
//$product1->price = "6";


//print $product1->getProducer();
//$product2 = new ShopProduct();
//$product1->title = "Собачье сердце";
//$product2->title = "Ревизор";
//print $product1->title;
//print $product2->title;
//var_dump($product1);
//var_dump($product2);
