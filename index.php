<?php


require_once './db.php';


// var_dump($prodotti);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-2</title>


    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        h1 {
            color: blue;
            text-align: center;
        }

        .price span {
            color: red;
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <h1 class="my-5">PET SHOP</h1>
    <div class="container d-flex gap-3 flex-wrap">



        <?php
        foreach ($products as $product) {


        ?>

            <div class="card" style="width: 18rem;">
                <img src="<?php echo $product->image_url ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $product->name ?>
                        <small><i class="fa-solid <?php echo $product->category->icon ?>"></i></small>
                    </h5>
                    <ul>

                        <li>
                            <?php

                            switch (get_class($product)) {
                                case 'Food':
                                    echo 'Data di scadenza: ' . $product->expiraton_date . '<br>' . 'Quantità: ' . $product->amount;
                                    break;
                                case 'Sit':
                                    echo 'Dimensione: ' . $product->dimension;
                                    break;
                                case 'Toy':
                                    echo 'Tipo: ' . $product->type . '<br>' . 'Durata prevista: ' . $product->getDurability();

                                    break;
                            }
                            ?>
                        </li>
                        <li class="card-text price">
                            Prezzo: <span><?php echo $product->price ?></span> €
                        </li>
                    </ul>
                    <a href="#" class="btn btn-primary">Acquista ora</a>
                </div>
            </div>

        <?php
        };
        ?>

    </div>

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>