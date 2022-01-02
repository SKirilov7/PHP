<?php

class Item
{
    private $name;
    private $price;

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getName()
    {
        return $this->name;
    }
}

class Box
{
    private $serialNumber;
    private $item;
    private $itemQuantity;
    private $priceForBox;

    public function __construct($serialNumber, $item, $itemQuantity)
    {
        $this->serialNumber = $serialNumber;
        $this->item = $item;
        $this->itemQuantity = $itemQuantity;
        $this->priceForBox = $this->item->getPrice() * $this->itemQuantity;
    }

    public function getPriceForBox()
    {
        return $this->priceForBox;
    }

    public function getSerialNumber()
    {
        return $this->serialNumber;
    }

    public function getItemName()
    {
        return $this->item->getName();
    }

    public function getItemPrice()
    {
        return $this->item->getPrice();
    }

    public function getQuantity()
    {
        return $this->itemQuantity;
    }

}

$command = readline();
$boxes = [];

while ($command !== 'end') {
    $data = explode(' ', $command);
    $newItem = new Item($data[1], floatval($data[3]));
    $newBox = new Box($data[0], $newItem, intval($data[2]));
    $boxes[] = $newBox;
    $command = readline();
}

uksort($boxes, function ($key1, $key2) use ($boxes) {
    $firstPrice = $boxes[$key1]->getPriceForBox();
    $secondPrice = $boxes[$key2]->getPriceForBox();
    return $secondPrice <=> $firstPrice;
});

foreach ($boxes as $box) {
    echo $box->getSerialNumber() . PHP_EOL;
    printf("-- %s - $%.2f: %d", $box->getItemName(), $box->getItemPrice(), $box->getQuantity());
    echo PHP_EOL;
    printf("-- $%.2f", $box->getPriceForBox());
    echo PHP_EOL;
}

