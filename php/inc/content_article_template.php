<h2 class="right__title">Lorem ipsum dolor sit amet</h2>
<article class="post-entier">
    <a href="" class="post__category post__category--color-team"><?php echo $article["catégorie"] ?></a>
    <h3><?php echo $article["titre"] ?></h3>
    <div class="post__meta">
        <img class="post__author-icon" src="<?php echo $article["image"] ?>" alt="">
        <strong class="post__author"><?php echo $article["auteur"] ?></strong>
        <time datetime="2018-02-10"><?php echo $article["date"] ?></time>
    </div>
    <p><?php echo $article["texte"] ?></p>
    <a href="index.php" class="post__link">Back to home</a>
</article>