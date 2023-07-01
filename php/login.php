<?php
require 'inc/header.php';
?>

<form action="traitementLogin.php" method="GET">

    <div>
        <!-- le label, une balise HTML dédiée pour expliquer un champs de formualaire -->
        <label>
            Votre login
        </label>
        <!-- Le champs de formulaire -->
        <input type="text" name="login">

    </div>


    <div>
        <!-- le label, une balise HTML dédiée pour expliquer un champs de formualaire -->
        <label>
            Votre mot de passe
        </label>
        <!-- Le champs de formulaire -->
        <input type="password" name="password">

    </div>


    <button>
        Envoyer
    </button>

</form>

<?php
require 'inc/footer.php';
?>