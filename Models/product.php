<?php

class product {
   public $name;
   public $price;
    public $description;
    public $category;

    function __construct(string $name, int $price, string $description, string $category) {
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
        $this->category = $category;
    }

}