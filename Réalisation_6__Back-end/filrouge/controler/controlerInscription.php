<?php

    //ajout de la vue
    require '../vue/vueInscription.php';

    // connexion à la BDD
    require '../config/connectDatabase.php';

        // récupération des champs du formulaire
        if(isset($_POST['nom'])
        && isset($_POST['prenom'])
        && isset($_POST['adresse'])
        && isset($_POST['CP'])
        && isset($_POST['ville'])
        && isset($_POST['tel'])
        && isset($_POST['email'])
        && isset($_POST['pseudo'])
        && isset($_POST['mdp']));
        
    {
        // stockage des données dans des variables
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $adresse = $_POST['adresse'];
            $CP = $_POST['CP'];
            $ville = $_POST['ville'];
            $tel = $_POST['tel'];
            $email = $_POST['email'];
            $pseudo = $_POST['pseudo'];
            $mdp = $_POST['mdp'];

    // exécution de la requête préparée
    require '../model/modelInscription.php';
    }
?>