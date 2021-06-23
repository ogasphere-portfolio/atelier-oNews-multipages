<?php
require 'inc/header.php';

// Je déclare un tableau associatif contenant toutes les données de mon
// article
$article = [
    'title'    => 'Lorem ipsum dolor article 2',
    'author'   => 'John Marchill',
    'text'     => 'Zombie ipsum reversus ab viral inferno, nam rick grimes malum cerebro. De carne lumbering animata corpora quaeritis. Summus brains sit​​, morbo vel maleficia? De apocalypsi gorger omero undead survivor dictum mauris. Hi mindless mortuis soulless creaturas, imo evil stalking monstra adventus resi dentevil vultus comedat cerebella viventium. Qui animated corpse, cricket bat max brucks terribilem incessu zomby. The voodoo sacerdos flesh eater, suscitat mortuos comedere carnem virus',
    'category' => 'news',
    'date'     => 'le 27 mars 2018',
    'icon'     => 'icon-john.png'
];

require 'inc/article-template.php';

require 'inc/footer.php';