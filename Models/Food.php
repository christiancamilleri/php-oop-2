<?php

require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/Category.php';

class Food extends Product
{
    public $expiraton_date;
    public $amount;

    function __construct(string $name, string $price, string $description, Category $category, string $image_url, string $expiraton_date, string $amount)
    {
        parent::__construct($name, $price, $description, $category,  $image_url);

        $this->expiraton_date = $expiraton_date;
        $this->amount = $amount;
    }
}
