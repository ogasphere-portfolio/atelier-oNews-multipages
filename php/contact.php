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
    <header class="left_contact">
      <h1 class="left__title">O'Clock Students News</h1>
      <div class="left__paragraph">
        <h2 class="left__subtitle"><strong class="left__subtitle-strong">Say a word</strong> contact us</h2>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque scelerisque suscipit nibh quis porttitor. Integer iaculis mi urna, a pulvinar quam adipiscing ut. Vivamus vel vestibulum mauris.
        </p>
      </div>
      <nav>
        <ul class="left__nav">
          <li class="left__nav-item"><a href="./plan_de_site.php" class="left__nav-link">Plan du site</a></li>
          <li class="left__nav-item"><a href="./mentions_legales.php" class="left__nav-link">Mentions légales</a></li>
          <li class="left__nav-item"><a href="./contact.php" class="left__nav-link">Contact</a></li>
        </ul>
      </nav>
    </header>
    <main class="right">
      <h2 class="right__title">Contact</h2>
      <div class="posts-contact">
        <div class="post post--solo">            

          <form action="/ma-page-de-traitement" method="post">
           <div class="bloc-form">
             <h3 class="identité">Identité</h3>
             
             <div>
             <p>Je suis
              <input type="radio" id="femme" name="drone" value="femme"
                    checked>
              <label for="femme">une femme</label>
              <input type="radio" id="homme" name="drone" value="homme"
                    checked>
              <label for="homme">un homme</label>
              </p>
            </div>
              
            
              <div>
                <label for="prenom">Mon prénom est </label>
                <input type="text" id="prenom" name="user_prenom">
              </div>
              
              <div>
                <label for="nom">Et mon nom, </label>
                <input type="text" id="nom" name="user_nom">
              </div>
              <div>
                <label for="pet-select">J'ai connu ce site grace à</label>
                
                   <select name="pets" id="pet-select">
                      <option value="">--sélectionnez une option--</option>
                      <option value="Facebook">Facebook</option>
                      <option value="Twitter">Twitter</option>
                      <option value="Google">Google</option>
                      <option value="bouche">Bouche à oreilles</option>
                      <option value="jt">JT de 13h de Jean-Pierre Pernault</option>
                      <option value="Autre">Autre</option>
                  </select>
              </div>
          </div> 

          <div class="bloc-form">
              <h3 class="message">Message</h3>
              <div>
                <label for="mail">Répondez-moi via</label>
                <input type="email" id="mail" name="user_mail">
              </div>
              
              <div>
                <label for="msg">Je voulais vous dire que</label>
                <textarea id="msg" name="user_message"></textarea>
              </div>
              <div>
              <label for="dockpicker">Et vous montrez ça aussi</label>
              <input type="file" id="docpicker"
              accept=".doc,.docx,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document">
              </div>
          </div> 
          
          <div class="bloc-form">
              <div>
                <input type="checkbox" id="scales" name="scales">
                <label for="scales">Je vérifie la véracité de ces informations</label>
              </div>
              <div class="button">
                <button type="submit">Envoyer</button>
              </div>
          </div> 
          </form>

        </div>
      </div>
    </main>
  </div>
</body>

</html>