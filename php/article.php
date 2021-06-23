<?php
// Inclus le code HTML du header
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

// Inclus le code HTML de l'article
require 'inc/article-template.php';

// Inclus le code HTML du footer
require 'inc/footer.php';