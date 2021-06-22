
<!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <title>oNews</title>
        <link rel="stylesheet" href="../css/reset.css">
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
        <div class="wrapper">
        <!-- emmet: header>h1+p+nav>ul>li*3>a -->
        <header class="left">
            <h1 class="left__title">O'Clock Students News</h1>
            <div class="left__paragraph">
            <h2 class="left__subtitle"><strong class="left__subtitle-strong">Latest news</strong> from our students</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque scelerisque suscipit nibh quis porttitor. Integer iaculis mi urna, a pulvinar quam adipiscing ut. Vivamus vel vestibulum mauris.
            </p>
            </div>
            <nav>
            <?php
            
            $lien_Nav = [
                "Plan de site" => "./plan_de_site.php",
                "Mentions légales" =>  "mentions_legales.php",
                "Contact"   => "contact.php",

            ];
            ?>
            <ul class="left__nav">  
            <?php
            
            foreach ($lien_Nav as $key => $value) {
                # code...
            ?>
                
                <li class="left__nav-item"><a href=<?=$value?> class="left__nav-link"><?=$key?></a></li>
               
            <?php
            } // fermerture de la boucle
            ?>
            </ul>
            <nav>
         
       
            
            </nav>
        </header>
        <main class="right">
