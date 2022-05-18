<?php

    require '../vue/vueInscription.php';

    require '../config/connectDatabase.php';

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

            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $adresse = $_POST['adresse'];
            $CP = $_POST['CP'];
            $ville = $_POST['ville'];
            $tel = $_POST['tel'];
            $email = $_POST['email'];
            $pseudo = $_POST['pseudo'];
            $mdp = $_POST['mdp'];

    require '../model/modelInscription.php';
    }
?>