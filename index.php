<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php
    require_once("./DB.php");
    ?>
    
    <style>
        img{
            width: 150px;
        }
    </style>
</head>
<body>
<div class="card">
  <img src="<?php echo $prodottoCibo->getImmagine(); ?>" alt="">

  <h3><?php echo $prodottoCibo->getTitolo(); ?></h3>

  <p><?php echo $prodottoCibo->getDescrizione(); ?></p>

  <p>Prezzo: <?php echo $prodottoCibo->getPrezzo(); ?> €</p>

  <p>Marca: <?php echo $prodottoCibo->getMarca(); ?></p>

  <p>Peso: <?php echo $prodottoCibo->getPeso(); ?></p>

  <h2> Spese di spedizione: <?php echo $prodottoCibo->getShipping();?> euro</h2>

</div>

<div class="card">
  <img src="<?php echo $prodottoGiochi->getImmagine(); ?>" alt="">

  <h3><?php echo $prodottoGiochi->getTitolo(); ?></h3>

  <p><?php echo $prodottoGiochi->getDescrizione(); ?></p>

  <p>Prezzo: <?php echo $prodottoGiochi->getPrezzo(); ?> €</p>

  <p>Marca: <?php echo $prodottoGiochi->getMateriale(); ?></p>

  <p>Peso: <?php echo $prodottoGiochi->getColore(); ?></p>

  <h2> Spese di spedizione: <?php echo $prodottoGiochi->getShipping();?> euro</h2>

</div>


</body>



</html>