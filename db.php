<?php

$product_category = ['cane', 'gatto'];

// $prova = new product('cuccia', 20,'jhabbfdjsdbb', $product_category[0] );
$prodotto1 = new gioco('Pallina', '12.99€', 'descrizione prodotto etc etc etc etc',[$product_category[0], $product_category[1]],'./img/palla.jpg' , 'gioco' );
$prodotto2 = new alimento('Croccantini', '25.99€', 'descrizione prodotto........', [$product_category[0]], './img/croccantini_cane.jpg', 'dd/mm/yyyy', '10kg');
$prodotto3 = new cuccia('Cuccia size small', '19.99€', 'descrizione............', [$product_category[1]],'./img/cuccia.jpg' ,'40cm x 40cm');
$prodotto4 = new gioco('Topino', '9.99€', 'descrizione............', [$product_category[1]],'./img/palla.jpg','gioco');
$prodotto5 = new cuccia('Cuccia size medium', '29.99€', 'descrizione............', [$product_category[0],$product_category[1]],'./img/cuccia.jpg','60cm x 60cm');
$prodotto6 = new alimento('Scatolette', '11.99€', 'descrizione............', [$product_category[1]],'./img/scatoletta_gatto.jpg','dd/mm/yyyy' , '3pz');
$prodotto7 = new cuccia('Cuccia big', '49.99€', 'descrizione............', [$product_category[0]],'./img/cuccia.jpg','100cm x 100cm');

$prodotti = [
    $prodotto1,
    $prodotto2,
    $prodotto3,
    $prodotto4,
    $prodotto5,
    $prodotto6,
    $prodotto7
];
