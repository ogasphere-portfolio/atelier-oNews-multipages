<?php
require 'data/articlesContenus.php';
require 'inc/header.php';

// pour acceder au titre de l'article 2
// $articles[2]['title'];

?>

<!-- emmet: h2+article*6>a+h3+div(img+strong+time)+p+a -->
<h2 class="right__title">Latest News</h2>
<div class="posts">
    <?php
    // boucle foreach permettant de boucler sur le tableau $articles
    // afin d'afficher automatiquement tous les articles
    foreach ($articles as $numero => $article) {
        // var_dump($numero);
        ?>
        <article class="post">
            <a href="" class="post__category post__category--color-<?= $article['category'] ?>">
                <?= $article['category'] ?>
            </a>
            <h3>
                <?= $article['title'] ?>
            </h3>
            <div class="post__meta">
                <img class="post__author-icon" 
                    src="../images/<?= $article['icon'] ?>" alt="">
                <strong class="post__author">
                    <?= $article['author']; ?>
                </strong>
                <time>
                    <?= $article['date']; ?>
                </time>
            </div>
            <p>
                <!-- 
                    On récupère les 50 premiers charactères de notre
                    texte d'articles.
                -->
                <?= substr($article['text'], 0, 50); ?>...
            </p>
            <a href="article.php?article=<?= $numero ?>" class="post__link">
                Continue reading
            </a>
        </article>
        <?php
    }
    // fin de la boucle foreach des articles
    ?>
</div>

<?php
require 'inc/footer.php';
?>