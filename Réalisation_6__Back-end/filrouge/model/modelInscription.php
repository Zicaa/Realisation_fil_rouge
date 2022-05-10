<?php
try {
    // Jé réalise une requête préparée qui va récupérer les données du formulaire et les insérer dans ma table CLIENT
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
    
    // Je crée les nouvelles données de ma BDD en y insérant les champs de mon formulaire
    $execution = $query->execute(array(
        'nom_client' => $nom, 
        'prenom_client' => $prenom, 
        'adresse_client' => $adresse, 
        'CP_client' => $CP, 
        'ville_client' => $ville,
        'telephone_client' => $tel, 
        'email_client' => $email, 
        'pseudo_client' => $pseudo, 
        'mdp_client' => MD5('motdepasseahash')
    ));

    // Si l'exécution de la requête a lieu, un message s'affiche en js
    if ($execution){
        echo "<script type='text/javascript'>alert('Votre compte a bien été créé');</script>";
        // Puis je renvoie à la page du compte
    }   header('Location: ../controler/controlerCompte.php');

    // Si la requête échoue, un message d'erreur s'affiche
    } catch (EXCEPTION $e) {
        die("Votre compte n'a pas pu être créé.");
}
?>