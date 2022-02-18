<?php

    // ajout de la vue
    require '../vue/vueConnexion.php';

    // connexion à la bdd
    require '../config/connectDatabase.php';

    // validation formulaire
    if(isset($_POST['pseudo'], $_POST['mdp'])){
        $login = $_POST['pseudo'];
        $mdp = $_POST['mdp'];

        require '../model/modelConnexion.php';
    }
    
?>