<?php
include "learningShopProductExtends.php";
class ShopProductWriter
{
    public function write (ShopProduct $shopProduct)
    {
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
