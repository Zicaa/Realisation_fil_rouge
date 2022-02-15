<?php

    // ajout de la vue
    require '../vue/vueConnexion.php';

    // connexion à la bdd
    require '../connectDatabase.php';

    // validation formulaire
    if(isset($_POST['login'], $_POST['mdp'])){
        $login = $_POST['login'];
        $mdp = $_POST['mdp'];

        require '../model/modelConnexion.php';
    }
    
?>