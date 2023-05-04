<?php

class gioco extends product{
    public $type;

    function __construct(string $name, string $price, string $description, array $category, string $image_url, string $type) {
        parent::__construct($name, $price, $description, [$category],  $image_url);

        $this->type = $type;

    }
}