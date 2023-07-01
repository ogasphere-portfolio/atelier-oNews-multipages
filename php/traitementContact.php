<?php

// la variable $_POST est une varible un peu magique.
// c'est une superglobales
// globale : parce qu'elle existe partout, tout le temps, dans n'importe quel fichiers
// super : parce qu'elle est automatiquement remplie avec des données reçues
// par le script (dans le cas de la validation d'un formulaire par exemple)
 var_dump($_POST);
// echo "pouet";

// Idéalement, ici il faudrait faire quelque chose avec les données reçues
// Les enregistrer quelque part
// Les envoyer par mail
// ....

// echo 'Merci pour votre message ' . $_POST['firstname'] 
//     . '. Nous vous recontacterons dans les plus bref delais.';

require 'inc/header.php';
?>

<h2 class="right__title">
    Nous contacter
</h2>


<p>
    Merci pour votre message <?= $_POST['firstname'] ?>, nous vous recontacterons dans les plus bref delais.
</p>

<?php
require 'inc/footer.php';
?>