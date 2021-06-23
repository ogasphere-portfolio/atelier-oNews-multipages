<?php
require 'inc/header.php';

// Je déclare un tableau associatif contenant toutes les données de mon
// article
$article = [
    'title'    => 'Lorem ipsum dolor article 1',
    'author'   => 'Darren Collison',
    'text'     => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus sapiente possimus dolor molestias laboriosam et aliquam, blanditiis amet provident corrupti at doloremque quam distinctio. Fugiat quasi sed id! Earum corporis eum laboriosam possimus!',
    'category' => 'team',
    'date'     => 'le 10 février 2018',
    'icon'     => 'icon-dar.png'
];

?>
<h2 class="right__title">
    <?php echo $article['title']; ?>
</h2>

<div class="posts">
    <div class="post post--solo">

        <a href="" class="post__category post__category--color-team">
            <?php echo $article['category']; ?>
        </a>
        
        <div class="post__meta">
            <img class="post__author-icon" 
                src="../images/<?php echo $article['icon']; ?>" alt="">

            <strong class="post__author">
                <?php echo $article['author']; ?>
            </strong>

            <time datetime="2018-02-10">
                <?php echo $article['date']; ?>
            </time>
        </div>
        
        <p class="single">
            <?php echo $article['text']; ?>
        </p>

        <a href="./index.php" class="post__link">back to home</a>
    </div>
</div>
<?php
require 'inc/footer.php';
?>