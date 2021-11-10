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
        float $price
    ) {
        $this->title = $title;
        $this->producerFirstName = $firstName;
        $this->producerMainName = $mainName;
        $this->price = $price;
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
    public $playLength;
    public function __construct(string $title, string $firstName, string $mainName, float $price, int $playLength)
    {
        parent::__construct($title, $firstName, $mainName, $price);
        $this->playLength = $playLength;
    }

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
    public $numPages;
    public function __construct(string $title, string $firstName, string $mainName, float $price, int $numPages)
    {
        parent::__construct($title, $firstName, $mainName, $price);
        $this->numPages = $numPages;
    }
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
print "Автор: {$book->getProducer()}";