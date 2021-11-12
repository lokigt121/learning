<?php
include "learningShopProductExtends.php";
class ShopProductWriter
{
    private $products = [];

    public function addProduct(ShopProduct $shopProduct)
    {
        $this->products[] = $shopProduct;
    }

    public function write (ShopProduct $shopProduct)
    {
        $str = "";
        foreach ($this->products as $shopProduct) {
            $str = $shopProduct->title . ": "
                . $shopProduct->getProducer()
                . " (" . $shopProduct->getPrice(). ") <br />\n";
            print $str;
        }

    }
}class Wrong
{

}
$product1 = new ShopProduct(
    "Обучение",
    "Лось",
    "Дмитрий",
    200
);
$product1->setDiscount(90);
$writer = new ShopProductWriter();
$writer->addProduct($product1);
$writer->write($product1);
