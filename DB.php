<?php

require_once("./category.php");
require_once("./product.php");
require_once("./Cibo.php");
require_once("./Giochi.php");


$categoriaCane = new Categoria("Cane");
$categoriaGatto = new Categoria("Gatto");


$prodottoCibo = new Cibo(
    "https://arcaplanet.vtexassets.com/arquivos/ids/249036-1800-1800/expecial-gatto-manzo-e-verdure.jpg",
    "Umido",
    "Umido per gatti in lattina",
    55,
    $categoriaGatto,
    "expecial Cat",
    "400 gr"
);


echo "<br>";
$prodottoGiochi = new Product(
    "Immagine gioco",
    "Corda",
    "Corda per cani a forma di osso",
    10,
    $categoriaCane,
    "corda",
    "blu"
);


