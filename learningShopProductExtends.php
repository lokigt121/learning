<?php
class ShopProduct
{
    protected $title;
    private $producerMainName;
    private $producerFirstName;
    protected $price;
    protected $discount = 0;

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

    public function setDiscount(int $percents)
    {
        $this->discount = $percents;
    }

    public function getPrice()
    {
        return ($this->price - $this->price * $this->discount / 100);
    }


}

class CdProduct extends ShopProduct
{
    private $playLength;
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
        $base = parent::getSummaryLine();
        $base .= ": Время звучания - {$this->playLength}";
        return $base;
    }
}
class BookProduct extends ShopProduct
{
    private $numPages;
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
        $base = parent::getSummaryLine();
        $base .= ": {$this->numPages} стр.";
        return $base;
    }
}
//$book = new BookProduct("Книга", "Дмитрий", "Лось", 100, 10);
//$cd = new CdProduct("Книга", "Дмитрий", "Лось", 222, 2000);
//var_dump($book);
//var_dump($book->getSummaryLine());
//$cd = new CdProduct("CD", "Владимир", "Топь", "2", 20);
//var_dump($cd);
//var_dump($cd->getSummaryLine());
//print "Автор: {$book->getProducer()}";
//$book->setDiscount(20) ;
//$cd->setDiscount(22);
//print "{$book->getPrice()}\n";
//print "{$cd->getPrice()}";