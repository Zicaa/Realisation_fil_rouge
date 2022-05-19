<?php

//ajout de la vue
require '../vue/vueConnexion.php';

// connexion à la BDD
require '../config/connectDatabase.php';

    // récupération des champs du formulaire
    if(isset($_POST['pseudo'])
    && isset($_POST['mdp']));
    
{
    // stockage des données dans des variables
        $pseudo = $_POST['pseudo'];
        $mdp = $_POST['mdp'];

// exécution de la requête préparée
require '../model/modelConnexion.php';
}

?>