<?php

class ShopProduct implements Chargeable
{
    use PriceUtilities;

    private $id = 0;
    private int|float $discount = 0;

    public function __construct(
        private string $title,
        private string $firstName,
        private string $mainName,
        protected int|float $price
    ){}

    public function setId(int $id)
    {
        $this->id = $id;
    }

    public function getProducer() : string
    {
        return $this->firstName . ' ' . $this->mainName;
    }

    public function getSummaryLine() : string
    {
        return "$this->title ($this->firstName $this->mainName)";
    }

    public function getPrice() : int|float
    {
        return $this->price;
    }

    public function getTitle() : string
    {
        return $this->title;
    }

    public function setDiscount(int|float $num)
    {
        $this->discount = $num;
    }

    public function getDiscount() : int|float
    {
        return $this->discount;
    }

    public static function getInstance($id, $pdo) : ShopProduct | null
    {
        $stmt = $pdo->prepare("select * from products where id=?");
        $result = $stmt->execute([$id]);
        $row = $stmt->fetch();
        if (empty($row)) {
            return null;
        }
        if ($row['type'] == 'book') {
            $product = new BookProduct(
                $row['title'],
                $row['firstname'],
                $row['mainname'],
                (float) $row['price'],
                (int) $row['numpages']
            );
        } elseif ($row['type'] == 'cd') {
            $product = new CdProduct(
                $row['title'],
                $row['firstname'],
                $row['mainname'],
                (float) $row['price'],
                (int) $row['playlength']
            );
        } else {
            $product = new ShopProduct(
                $row['title'],
                $row['firstname'],
                $row['mainname'],
                (float) $row['price']
            );
        }
        $product->setId($row['id']);
        if (!empty($row['discount'])) {
            $product->setDiscount($row['discount']);
        }
        return $product;
    }

    public function __toString(): string
    {
        return "Название: $this->title | Цена: $this->price";
    }
}