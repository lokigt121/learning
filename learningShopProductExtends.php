<?php
class ShopProduct
{
    public $numPages;
    public $playLength;
    public $title;
    public $producerMainName;
    public $producerFirstName;
    public $price;

    public function __construct(
        string $title,
        string $firstName,
        string $mainName,
        float $price,
        int $numPages = 0,
        int $playLength = 0
    ) {
        $this->title = $title;
        $this->producerFirstName = $firstName;
        $this->producerMainName = $mainName;
        $this->price = $price;
        $this->numPages = $numPages;
        $this->playLength = $playLength;
    }

    public function getProducer()
    {
        return $this->producerFirstName . " " . $this->producerMainName;
    }
    public function getSummaryLine()
    {
        $base = "{$this->title} ( {$this->getProducer()})";
        return $base;
    }

}

class CdProduct extends ShopProduct
{
    public function getPlayLength()
    {
        return $this->playLength;
    }

    public function getSummaryLine()
    {
        $base = "{$this->title} ( {$this->getProducer()}): Время звучания - {$this->playLength}";
        return $base;
    }
}
class BookProduct extends ShopProduct
{
    public function getNumberOfPages()
    {
        return $this->numPages;
    }
    public function getSummaryLine()
    {
        $base = "{$this->title} ( {$this->getProducer()}): {$this->numPages} стр.";
        return $base;
    }
}
$book = new BookProduct("Книга", "Дмитрий", "Лось", 100, 10);
var_dump($book);
var_dump($book->getSummaryLine());
$cd = new CdProduct("CD", "Владимир", "Топь", "2", 0, "200");
var_dump($cd);
var_dump($cd->getSummaryLine());