<?php
require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/Category.php';

class Sit extends Product
{
    public $dimension;

    function __construct(string $name, string $price, string $description, Category $category, string $image_url, string $dimension)
    {
        parent::__construct($name, $price, $description, $category, $image_url);

        $this->dimension = $dimension;
    }
}
