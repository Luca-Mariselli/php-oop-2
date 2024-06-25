<?php 

include __DIR__ . "/models/Categoria.php";
include __DIR__ . "/models/Prodotto.php";
include __DIR__ . "/models/Cibo.php";
include __DIR__ . "/models/Cuccia.php";
include __DIR__ . "/models/Gioco.php";

// Categorie cane/gatto
$categoriaCane = new Categoria("Cane", "https://img.freepik.com/free-psd/cute-brown-white-dog-scene_23-2150179279.jpg?size=626&ext=jpg&ga=GA1.1.1141335507.1719273600&semt=ais_user");
$categoriaGatto = new Categoria("Gatto", "https://i.pinimg.com/originals/4e/09/37/4e09375f76be3c80001040dda7db13dc.png");

//Proprieta cibo
// $crocchetteMaxi = new Cibo("Secco", "Mensile")
// $crocchetteMaxi = new Cibo("Secco", "Mensile")

//Prodotti
$ossoGiocattolo = new Prodotto("Osso Giocattolo", $categoriaCane, 15)

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <pre>
       <?php
       var_dump($categoriaCane);
       var_dump($categoriaGatto);
       var_dump($ossoGiocattolo);
       ?>  
    </pre>
</body>
</html>