<?php

    // ajout du formulaire html
    require '../vue/vueConnexion.php';

    // connexion à mon localhost
    require '../connectDatabase.php';

    // validation du formulaire html
    if(isset($_POST['login'], $_POST['mdp'])){
        $login = $_POST['login'];
        $mdp = $_POST['mdp'];

        require '../model/modelConnexion.php';
    }
    
?>