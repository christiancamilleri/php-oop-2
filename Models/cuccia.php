<?php

class cuccia extends product{
    public $dimensione;

    function __construct(string $name, string $price, string $description, string $category, string $image_url, string $dimensione) {
        parent::__construct($name, $price, $description, $category, $image_url);

        $this->dimensione = $dimensione;
        
    }
}