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
    7,
    "expecial Cat",
    "400 gr"
);

try {

    $prodottoCibo = new Cibo(
    "https://arcaplanet.vtexassets.com/arquivos/ids/249036-1800-1800/expecial-gatto-manzo-e-verdure.jpg",
    "Umido",
    "Umido per gatti in lattina",
    55,
    $categoriaGatto,
    -7,
    "expecial Cat",
    "400 gr");
    var_dump($prodottoCibo);

} catch (Exception $e) {

    echo "Error: " . $e -> getMessage();
}



echo "<br>";
$prodottoGiochi = new Giochi(
    "https://arcaplanet.vtexassets.com/arquivos/ids/223864-1800-1800/trixie-cane-gioco-corda.jpg",
    "Corda",
    "Corda per cani a forma di osso",
    10,
    $categoriaCane,
    12,
    "corda",
    "blu"
);


