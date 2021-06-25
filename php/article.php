<?php
// Inclus le code HTML du header
require 'inc/header.php';

// Je charge le fichier qui contient tous les
// articles
require 'data/articlesContenus.php';
// J'ai donc accès à la variable $articles
// définie dans le fichier articlesContenus.php
// var_dump($articles);

// var_dump($_GET);
// JE récupère le parametre GET permettant de connaitre
// l'article à afficher
$idArticle = $_GET['article'];

// si $idArticle correspond une clef existante de notre tableau $article
if (array_key_exists($idArticle, $articles)) {
// if (isset($articles[$idArticle])) {

    // Je récupère les données de l'article en selectionnant
    // la bonne entrée du tableau $articles
    $article = $articles[$idArticle];

    // // Inclus le code HTML de l'article
    require 'inc/article-template.php';
}
// Sinon
else {
    echo "Désolé, cet article n'existe (par contre, les fraises à la sardine oui)";
}
// Inclus le code HTML du footer
require 'inc/footer.php';