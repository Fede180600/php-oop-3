<?php
// classi necessarie per creare uno shop online con le seguenti caratteristiche
// L'e-commerce vende prodotti per gli animali.
// I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
// L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
// Il pagamento avviene con la carta di credito, che non deve essere scaduta.

require_once __DIR__ . "/Food.php";
require_once __DIR__ . "/Games.php";
require_once __DIR__ . "/PetHouse.php";
require_once __DIR__ . "/User.php";
require_once __DIR__ . "/CreditCard.php";

$enova_crocchette_1 = new Food("Crocchette Mono", 62.5, "Enova", "Pet Snacks", "Pollo", "Per cani", "+16 mesi", "12kg" );
// var_dump($enova_crocchette_1);

$enova_crocchette_2 = new Food("Crocchette Mono", 57.25, "Enova", "pet Snacks", "Angello", "Per cani", "<16 mesi", "10kg");
// var_dump($enova_crocchette_2);

$pallina_tennis = new Games("Pallina Tennis", 6.50, "KONG", "Pet Games", "Gomma e tessuto sintetico", "Adatto a ogni taglia di animale");
// var_dump($pallina_tennis);

$osso_gomma = new Games("Osso in gomma per massaggio denti e gengive", 8.30, "Camon", "Pet Games", "Gomma 100% Naturale", "Pet size: +20Kg");
// var_dump($osso_gomma);

$casetta_m = new PetHouse("Cuccia Domus", 195, "FERPLAST", "PetHouse", "L 49 CM x W 64 CM x H 44 CM", "Per esterni");
// var_dump($casetta_m);

$casetta_xl = new PetHouse("Cuccia Luxus", 275, "MONDIAL PET", "PetHouse", "L 75 CM x W 100 CM x H 68 CM", "Per esterni");
// var_dump($casetta_xl);

$cuccetta = new PetHouse("Cuscino imbottitura soffice", 23, "Pet around you", "PetHouse", "35 CM x 40 CM", "Adatto agli interni");
// var_dump($cuccetta);

$federico = new User("Federico", "fede180600@libero.it", false);
$federico->addProductToCart($pallina_tennis);
$federico->addProductToCart($enova_crocchette_1);
$federico_credit_card = new CreditCard("1234 5678 9101 1121", "02/2022", "322", false);

$marco = new User("Marco", "marco54@gmail.com", true);
$marco->addProductToCart($casetta_xl);
$marco->addProductToCart($osso_gomma);
$marco->addProductToCart($cuccetta);
$marco_credit_card = new CreditCard("1098 7654 3210 1234", "07/2032", "452", true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<!-- HEADER -->
<header style="height: 100px">
    <h1 style="text-align: center; line-height: 100px;">Pet Shop Top </h1>
</header>
<!-- /HEADER -->

<!-- MAIN -->
<main>
    <section>
        <h2>Prodotti Disponibili:</h2>
        <ul style="line-height: 35px;">
            <li><?php echo $enova_crocchette_1->productInfo() . "<br>" .  $enova_crocchette_1->foodInfo() ?></li>
            <li><?php echo $enova_crocchette_2->productInfo() . "<br>" .  $enova_crocchette_2->foodInfo() ?></li>
            <li><?php echo $pallina_tennis->productInfo() . "<br>" . $pallina_tennis->gameInfo() ?></li>
            <li><?php echo $osso_gomma->productInfo() . "<br>" . $osso_gomma->gameInfo() ?></li>
            <li><?php echo $casetta_m->productInfo() ?></li>
            <li><?php echo $casetta_xl->productInfo() ?></li>
            <li><?php echo $cuccetta->productInfo() ?></li>
        </ul>
    </section>

    <section>
        <h2>Ciao <?php echo $federico->name ?> ecco il tuo Carrello:</h2>
        <ul>
            <?php foreach($federico->cart as $product) {?>
                <li><?php echo $product->productInfo()?></li>
            <?php } ?>
        </ul>
        <h3>Valore Carrello:<?php echo $federico->getPriceDiscounted() ?></h3>
        <div style="color: #102156"><strong><?php echo $federico_credit_card->isValid()?></strong></div>
        <button style="margin-top: 15px;">Paga</button>
    </section>
    <section>
        <h2>Ciao <?php echo $marco->name ?> ecco il tuo Carrello:</h2>
        <ul>
            <?php foreach($marco->cart as $product) {?>
                <li><?php echo $product->productInfo()?></li>
            <?php } ?>
        </ul>
        <h3>Valore Carrello:<?php echo $marco->getPriceDiscounted() ?></h3>
        <div style="color: #102156"><strong><?php echo $marco_credit_card->isValid()?></strong></div>
        <button style="margin-top: 15px;">Paga</button>
    </section>
</main>
<!-- /MAIN -->

</body>
</html>
