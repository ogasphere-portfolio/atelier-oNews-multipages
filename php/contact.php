<?php
require 'inc/header.php';

//  condition qui me permet de m'assurer que le script ai reçu des
// données
if (!empty($_POST)) {

    var_dump($_POST);

}

?>
<h2 class="right__title">Nous contacter</h2>

<div class="post post--solo">

    <!-- La balise <form> est indispensable -->
    <form action="" class="contact" method="POST">

        <fieldset class="contact__group">
            <legend>Genre</legend>
            <div>
                <span>
                    Vous êtes
                </span>
                <!-- le label, une balise HTML dédiée pour expliquer un champs de formualaire -->
                <label for="genderFemale">
                    une femme
                </label>
                <!-- Le champs de formulaire -->
                <input type="radio" name="gender" id="genderFemale" value="female">

                <label for="genderMale">
                    un homme
                </label>
                <!-- Le champs de formulaire -->
                <input type="radio" name="gender" id="genderMale" value="male">

                <label for="genderOther">
                    autre
                </label>
                <!-- Le champs de formulaire -->
                <input type="radio" name="gender" id="genderOther" value="other">
            </div>
        </fieldset>
        <fieldset>
            <legend>Vos infos</legend>

            <div>
                <!-- le label, une balise HTML dédiée pour expliquer un champs de formualaire -->
                <label for="firstname">
                    Votre prénom
                </label>
                <!-- Le champs de formulaire -->
                <input type="text" name="firstname" id="firstname"  class="contact__text" >

            </div>
            <div>
                <!-- le label, une balise HTML dédiée pour expliquer un champs de formualaire -->
                <label for="lastname">
                    Votre nom
                </label>
                <!-- Le champs de formulaire -->
                <input type="text" name="lastname" id="lastname"  class="contact__text" required>

            </div>

            <div>
                <!-- le label, une balise HTML dédiée pour expliquer un champs de formualaire -->
                <label for="email">
                    Votre email
                </label>
                <!-- Le champs de formulaire -->
                <input type="email" name="email" id="email"  class="contact__text">

            </div>

            <div>
                <!-- le label, une balise HTML dédiée pour expliquer un champs de formualaire -->
                <label for="message">
                    Votre message
                </label>

                <!-- Le champs de formulaire -->
                <textarea name="message" id="message" class="contact__text"></textarea>
            </div>
        </fieldset>

        <div>
            Envoyez un fichiers
            <input type="file" name="" id="">

        </div>

        <div>
            <label for="cgu">
                Validez les CGU que vous n'avez pas lu
            </label>
            <!-- l'attribut required permet de rendre le champ obligatoire -->
            <input type="checkbox" name="cgu" id="cgu" required>

        </div>


        <!-- 
            L'appuie par l'internaute sur ce bouton envoyer les données
            saisies par l'internaute vers le serveur
        -->
        <button class="contact__button">
            Envoyer
        </button>

    </form>

</div>

<?php
require 'inc/footer.php';
?>
