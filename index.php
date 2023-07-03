<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php
    require_once("./DB.php");
    ?>
    
</head>
<body>
<div class="card">
  <img src="<?php echo $prodottoCibo->getImmagine(); ?>" alt="">

  <h3><?php echo $prodottoCibo->getTitolo(); ?></h3>

  <p><?php echo $prodottoCibo->getDescrizione(); ?></p>

  <p>Prezzo: <?php echo $prodottoCibo->getPrezzo(); ?> €</p>

  <img src="<?php echo $prodottoCibo->getCategoria()->getIcona(); ?>" alt="<?php echo $prodottoCibo->getCategoria()->getNome(); ?>">

  <p>Tipo: <?php echo $prodottoCibo->getMarca(); ?></p>

</div>


</body>
</html>