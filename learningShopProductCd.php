<?php
class CdProduct
{
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
        int $playLength
    ) {
        $this->title = $title;
        $this->producerFirstName = $firstName;
        $this->producerMainName = $mainName;
        $this->price = $price;
        $this->playLength = $playLength;
    }

    public function getPlayLength()
    {
        return $this->playLength;
    }

    public function getProducer()
    {
        return $this->producerFirstName . " " . $this->producerMainName;
    }

    public function getSummaryLine()
    {
        $base = "{$this->title} ( {$this->getProducer()}): Время звучания - {$this->playLength}";
        return $base;
    }
}
$cd = new CdProduct("CD", "Дмитрий", "Лось", 100, 10);
print $cd->getSummaryLine();