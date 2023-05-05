<?php
require_once __DIR__ . '/Models/Product.php';
require_once __DIR__ . '/Models/Food.php';
require_once __DIR__ . '/Models/Toy.php';
require_once __DIR__ . '/Models/Sit.php';

$categories = [
    new Category('dog', 'fa-dog'),
    new Category('cat', 'fa-cat')
];

// $prova = new product('cuccia', 20,'jhabbfdjsdbb', $product_category[0] );
$product1 = new Toy('Pallina', '12.99', 'descrizione prodotto etc etc etc etc', $categories[0], './img/palla.jpg', 'gioco');
$product2 = new Food('Croccantini', '25.99', 'descrizione prodotto........', $categories[0], './img/croccantini_cane.jpg', 'dd/mm/yyyy', '10kg');
$product3 = new Sit('Cuccia size small', '19.99', 'descrizione............', $categories[1], './img/cuccia.jpg', '40cm x 40cm');
$product4 = new Toy('Topino', '9.99', 'descrizione............', $categories[1], './img/palla.jpg', 'gioco');
$product5 = new Sit('Cuccia size medium', '29.99', 'descrizione............', $categories[0], './img/cuccia.jpg', '60cm x 60cm');
$product6 = new Food('Scatolette', '11.99', 'descrizione............', $categories[1], './img/scatoletta_gatto.jpg', 'dd/mm/yyyy', '3pz');
$product7 = new Sit('Cuccia big', '49.99', 'descrizione............', $categories[0], './img/cuccia.jpg', '100cm x 100cm');
$product8 = new Toy('Osso', '4.99', 'descrizione............', $categories[0], './img/palla.jpg', 'gioco');


$products = [
    $product1,
    $product2,
    $product3,
    $product4,
    $product5,
    $product6,
    $product7,
    $product8
];

try {
    $product1->setDuration_years(6);
    $product4->setDuration_years(8);
    $product8->setDuration_years(2);
} catch (Exception $e) {
    echo $e;
}
