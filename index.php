<?php 

include __DIR__ . "/models/Categoria.php";
include __DIR__ . "/models/Prodotto.php";
include __DIR__ . "/models/Cibo.php";
include __DIR__ . "/models/Cuccia.php";
include __DIR__ . "/models/Gioco.php";

// Categorie cane/gatto
$categoriaCane = new Categoria("Cane", "https://img.freepik.com/free-psd/cute-brown-white-dog-scene_23-2150179279.jpg?size=626&ext=jpg&ga=GA1.1.1141335507.1719273600&semt=ais_user");
$categoriaGatto = new Categoria("Gatto", "https://i.pinimg.com/originals/4e/09/37/4e09375f76be3c80001040dda7db13dc.png");


//Prodotti
$ossoGiocattolo = new Gioco("Osso Giocattolo", $categoriaCane, 15);
$crocchetteMaxi = new Cibo("Crocchette maxi", $categoriaGatto, 30);
$cucciaCoperta = new Cuccia("Cuccia Coperta", $categoriaCane, 50);


//Array con tutti i prodotti
$prodotti = [$ossoGiocattolo, $crocchetteMaxi, $cucciaCoperta]
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
    <div class="container">
        <?php foreach($prodotti as $prodottoSingolo){
            echo 
            "<div class='card'>" .
                "<div class='bg'>" . "Nome:" . " " . $prodottoSingolo->getNome() . "</div>" .
                "<div class='bg'>" . "Tipologia:" . " " . $prodottoSingolo->getClasse() . "</div>" . 
                "<div class='bg'>" . "Prezzo:" . " " . $prodottoSingolo->getPrezzo() . "$" . "</div>" .
            "</div>";
            
        }
        ?>  
        
    </div>
</body>
</html>