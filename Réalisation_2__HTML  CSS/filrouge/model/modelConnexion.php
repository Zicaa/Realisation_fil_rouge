<?php

// J'initialise une requête préparée qui va sélectionner les données de ma table CLIENT
try{
    $query = $database->prepare('SELECT * FROM client');

    // Je déclare la variable $compare à "false" par défaut
    $compare = false;

    // Je parcours les données de ma table client dont je fais la requête
    while($data = $query->fetch()){
        // Si les données de ma base de données correspondent à celles tapées (Login et Mdp)
        if($data['pseudo_client'] == $pseudo && $data['mdp_client'] == $mdp){
            // Ma variable $compare passe à "true"
            $compare = true;
        } 
    }

    // Si ma variable $compare est égale à "true", je renvoie à la page du compte
    if($compare === true){
        header('Location: ../controler/controlerCompte.php');
    // Sinon un message d'erreur s'affiche "Pseudo ou mot de passe incorrect"
    } else {
        echo "<script type='text/javascript'>alert('Pseudo ou mot de passe incorrect');</script>";
    }

// Si la requête échoue, une page d'erreur est affichée
} catch(EXCEPTION $e){
            die('Erreur : ' .$e->getMessage());
}

?>