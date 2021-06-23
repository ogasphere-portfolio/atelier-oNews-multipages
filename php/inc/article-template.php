<!-- 
    Attention, ce template a besoin d'une
    variable $article fonctionner correctement
-->
<h2 class="right__title">
    <?php echo $article['title']; ?>
</h2>

<div class="posts">
    <div class="post post--solo">

        <a href="" class="post__category post__category--color-<?php echo $article['category']; ?>">
            <?php echo $article['category']; ?>
        </a>
        
        <div class="post__meta">
            <img class="post__author-icon" 
                src="../images/<?php echo $article['icon']; ?>" alt="">

            <strong class="post__author">
                <?php echo $article['author']; ?>
            </strong>

            <time>
                <?php echo $article['date']; ?>
            </time>
        </div>
        
        <p class="single">
            <?php echo $article['text']; ?>
        </p>

        <a href="./index.php" class="post__link">back to home</a>
    </div>
</div>