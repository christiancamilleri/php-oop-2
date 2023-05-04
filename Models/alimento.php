<?php

class alimento extends product{
    public $data_scadenza;
    public $quantità;

    function __construct(string $name, string $price, string $description, array $category, string $image_url, string $data_scadenza, string $quantità) {
        parent::__construct($name, $price, $description, [$category],  $image_url);

        $this->data_scadenza = $data_scadenza;
        $this->quantità = $quantità;

    }
}