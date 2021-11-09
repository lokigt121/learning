<?php
include "learning.php";
class ShopProductWriter
{
    public function write (ShopProduct $shopProduct)
    {
        if(!($shopProduct instanceof CdProduct) && !($shopProduct instanceof BookProduct))
        {
            die("Передан неверный тип данных");
        }
        $str = $shopProduct->title . ": "
            . $shopProduct->getProducer()
            . " (" . $shopProduct->price . ") \n";
        print $str;
    }
}class Wrong
{

}
$product1 = new ShopProduct(
    "Обучение",
    "Лось",
    "Дмитрий",
    10
);
$writer = new ShopProductWriter();
$writer->write($product1);
