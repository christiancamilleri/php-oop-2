<?php

class product {
   public $name;
   public $price;
    public $description;
    public $category;
    public $image_url;

    function __construct(string $name, string $price, string $description, string $category, string $image_url) {
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
        $this->category = $category;
        $this->image_url = $image_url;
    }

    public function getClass($product) {
        if(get_class($product) == 'cuccia') {
            return 'Dimensione:' . $product->dimensione;

        } else if (get_class($product) == 'gioco') {
            return 'Tipo:' . $product->type; 
        } else if (get_class())
    }

}