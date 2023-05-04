<?php
require_once './Models/product.php';
require_once './Models/alimento.php';
require_once './Models/gioco.php';
require_once './Models/cuccia.php';

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <!-- css -->
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <h1>PET SHOP</h1>
    <div class="container d-flex gap-3 flex-wrap">



        <?php
        foreach ($prodotti as $prodotto) {


        ?>

            <div class="card" style="width: 18rem;">
                <img src="<?php echo $prodotto->image_url ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $prodotto->name ?></h5>
                    <ul>
                        <li class="card-text">
                            Prezzo: <?php echo $prodotto->price ?>
                        </li>
                        <li class="card-text">
                            Categoria: <?php echo $prodotto->category ?>
                        </li>
                        <?php if (get_class($prodotto) == 'cuccia') { ?>
                            <li class="card-text">
                                Dimensione: <?php echo $prodotto->dimensione ?>
                            </li>
                        <?php } else if (get_class($prodotto) == 'alimento') { ?>
                            <li class="card-text">
                                Data di scadenza: <?php echo $prodotto->data_scadenza ?>
                            </li>
                            <li class="card-text">
                                Quantità: <?php echo $prodotto->quantità ?>
                            </li>
                        <?php } else if (get_class($prodotto) == 'gioco') { ?>
                            <li class="card-text">
                                Tipo: <?php echo $prodotto->type ?>
                            </li>
                        <?php } ?>
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