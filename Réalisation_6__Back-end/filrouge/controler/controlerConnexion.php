<?php

    // Je récupère la vue de mon formulaire de connexion
    require '../vue/vueConnexion.php';

    // Je me connecte à la bdd
    require '../config/connectDatabase.php';

    // Je récupère les données renseignées dans mes champs de connexion
    if(isset($_POST['pseudo'], $_POST['mdp'])){
        $pseudo = $_POST['pseudo'];
        $mdp = $_POST['mdp'];

        // Je mets en relation les données de la vue à mon modèle pour l'exécution de la requête préparée
        require '../model/modelConnexion.php';
    }
    
?>