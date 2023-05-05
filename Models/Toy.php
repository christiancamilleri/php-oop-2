<?php

require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/Category.php';

class Toy extends Product
{
    public $type;

    function __construct(string $name, string $price, string $description, Category $category, string $image_url, string $type)
    {
        parent::__construct($name, $price, $description, $category,  $image_url);

        $this->type = $type;
    }
}
