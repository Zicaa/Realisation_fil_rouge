<?php

try {
    $query = $database->prepare("INSERT INTO client SET 
        nom_client = :nom_client,
        prenom_client = :prenom_client,
        adresse_client = :adresse_client,
        CP_client = :CP_client,
        ville_client = :ville_client,
        telephone_client = :telephone_client,
        email_client = :email_client,
        pseudo_client = :pseudo_client,
        mdp_client = :mdp_client"
    ); 
    
    //$mdp = hash('sha256', $mdp);
    
    $execution = $query->execute(array(
        'nom_client' => $nom, 
        'prenom_client' => $prenom, 
        'adresse_client' => $adresse, 
        'CP_client' => $CP, 
        'ville_client' => $ville,
        'telephone_client' => $tel, 
        'email_client' => $email, 
        'pseudo_client' => $pseudo, 
        'mdp_client' => $mdp
    ));

    if ($execution){
        echo "<script type='text/javascript'>alert('Votre compte a bien été créé!');</script>";
    } header('Location: ../controler/controlerCompte.php');

    } catch (EXCEPTION $e) {
        die("Votre compte n'a pas pu être créé.");
}

?>