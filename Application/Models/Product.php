<?php
class Product {
    private int $id;
    private string $name;
    private string $image_path;
    private float $price;
    private float $rate;
    private string $description;

    public function __construct(
        ?array $arrayProducts,
        ?string $name = "",
        ?string $image_path = "",
        ?float $price = 0.0,
        ?float $rate = 0.0,
        ?int $id = -1,
        ?string $description = "")
    {
        if(!empty($arrayProducts)) //change count to empty($arrayProducts)
        {
            $this->id = $arrayProducts['id'];
            $this->name = $arrayProducts['name'];
            $this->image_path = $arrayProducts['image_path'];
            $this->price = $arrayProducts['price'];
            $this->rate = $arrayProducts['rate'];
            $this->description = $arrayProducts['description'];
        } else {
            $this->id = $id;
            $this->name = $name;
            $this->image_path = $image_path;
            $this->price = $price;
            $this->rate = $rate;
            $this->description = $description;
        }
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getImagePath(): string
    {
        return $this->image_path;
    }

    public function getPrice(): float
    {
        return $this->price;
    }
    
    public function getRate(): float
    {
        return $this->rate;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function setImagePath(string $image_path): void
    {
        $this->image_path = $image_path;
    }

    public function setPrice(float $price): void
    {
        $this->price = $price;
    }
    
    public function setRate(float $rate): void
    {
        $this->rate = $rate;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function __toString()
    {
        return "Name => ".$this->getName().
        "<br/>Path => ".$this->getImagePath().
        "<br/>Price => ".$this->getPrice().
        "<br/>Rate => ".$this->getRate().
        "<br/>Description => ".$this->getDescription();
    }

    public function toArray(): array {
        return [
            'id' => $this->id,
            'Name' => $this->name,
            'Path' => $this->image_path,
            'Price' => $this->price,
            'Rate' => $this->rate,
            'Description' => $this->description,
        ];
    }
}
?>
