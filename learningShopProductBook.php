<?php
class BookProduct
{
    public $numPages;
    public $title;
    public $producerMainName;
    public $producerFirstName;
    public $price;

    public function __construct(
        string $title,
        string $firstName,
        string $mainName,
        float $price,
        int $numPages
    ) {
        $this->title = $title;
        $this->producerFirstName = $firstName;
        $this->producerMainName = $mainName;
        $this->price = $price;
        $this->numPages = $numPages;
    }

    public function getNumberOfPages()
    {
        return $this->numPages;
    }

    public function getProducer()
    {
        return $this->producerFirstName . " " . $this->producerMainName;
    }

    public function getSummaryLine()
    {
        $base = "{$this->title} ( {$this->getProducer()}): {$this->numPages} стр.";
        return $base;
    }
}
$book = new BookProduct("Книга", "Дмитрий", "Лось", 100, 10);
print $book->getSummaryLine();