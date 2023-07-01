<?php
<<<<<<< HEAD
require 'inc/header.php';
    

$article = [
    "titre" => "Lorem ipsum dolor article 1",
    "auteur" => "Darren Collison",
    "texte" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus alias enim praesentium dignissimos, necessitatibus tempore cum, laborum doloribus voluptate nostrum, expedita perferendis doloremque nulla! Molestias quam aliquam neque pariatur rerum, velit blanditiis harum officia rem praesentium odit exercitationem. Velit officia illo inventore. Velit illum, cumque vitae accusantium ex laudantium numquam aliquid voluptatibus. Quasi, quaerat sapiente eligendi asperiores sequi blanditiis corporis dolore voluptatem omnis delectus veniam ipsum vel a sint quia aliquam! Quos natus unde rem, fugit tenetur debitis nihil ab? Dolorum nam debitis quis quo suscipit, eveniet veritatis labore? Ad perspiciatis mollitia sint beatae deleniti, soluta blanditiis iusto eius a aut veritatis ipsa fugiat eos aliquam quae explicabo rerum quaerat odio id incidunt animi. Vitae molestias labore animi voluptates nemo autem totam non at magnam, cumque aliquid soluta ipsum delectus quibusdam ullam eaque! Adipisci veniam culpa provident non ullam, accusamus beatae! Dolor possimus culpa facilis deleniti ex, repellat in id autem qui voluptates totam nulla quis sequi quam consequuntur sed ab officia? Minus, amet? Quis veritatis itaque a explicabo, quia molestiae perferendis necessitatibus laudantium obcaecati similique alias nulla consequatur nam! Fuga soluta debitis aliquam dolor deleniti delectus beatae, impedit dignissimos facilis odit. Ratione reiciendis nisi labore fugit perferendis molestias atque? Facilis, quisquam culpa consequatur voluptatum, vel, tempore possimus in veniam repellendus minus ad sed maxime minima aliquid fuga sunt nemo repellat excepturi odio. Dicta tempora sapiente quas velit odit exercitationem id debitis dolor corrupti. Ex quasi deserunt unde eligendi saepe, sed quaerat iusto tempora laborum veniam, hic perferendis reiciendis quo totam sint quas, architecto neque sequi labore non similique! Necessitatibus saepe ducimus quam cumque. Doloribus error atque veritatis cumque dolorum ea eos laudantium modi officia quod animi sit quisquam odio, omnis quidem rerum aspernatur odit unde. Minus dicta quo explicabo quod! Temporibus rem consectetur, eaque quo asperiores quidem ad in esse suscipit cupiditate, tempore fuga nam? Recusandae placeat sequi nemo sed commodi rerum molestiae saepe explicabo omnis. Excepturi quae asperiores praesentium unde adipisci! Voluptate placeat atque quisquam cum saepe illo soluta doloribus. Architecto autem at reiciendis molestiae accusamus? Expedita repudiandae tempore facilis qui quibusdam ipsa nesciunt quidem assumenda eveniet, vel consequuntur maiores error, laborum, exercitationem rerum! Non qui doloremque possimus ducimus eos veritatis magnam rerum eveniet distinctio recusandae eligendi, praesentium omnis fugit ullam natus consequuntur dolorum quam placeat id suscipit accusamus aspernatur quisquam provident. Eius esse, illo at accusamus architecto consequuntur magnam quo ab nostrum expedita dolorem rem porro. Sapiente?",
    "catégorie" => "Team",
    "date" => "le 10 février 2018",
    "image" => "../images/icon-dar.png"
];
 
require 'inc/content_article_template.php';

      

require 'inc/footer.php';
?>
=======
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
>>>>>>> clockOlivier/master
