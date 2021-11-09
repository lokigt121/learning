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
        $this->type = null;
        if ($this->numPages != 0 && $this->playLength == 0) {
            $this->type = "book";
        }
        elseif ($this->playLength != 0 && $this->numPages == 0)
            $this->type = "cd";
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
        $base = "{$this->title} ( {$this->getProducer()}";
        if ($this->type == 'book') {
            $base .= ": {$this->numPages} стр.";
        }
        elseif ($this->type == 'cd') {
            $base .= ": Время звучания - {$this->playLength}";
        }
        return $base;
    }
}
$book = new ShopProduct("Книга", "Дмитрий", "Лось", 100, 10, 10);
var_dump($book->type);