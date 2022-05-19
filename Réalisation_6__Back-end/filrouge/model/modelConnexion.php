<?php
// requête préparée qui sélectionne tous les pseudos de la BDD
 try {
    $query = $database->prepare("SELECT * FROM client WHERE
        pseudo_client = :pseudo_client"
    ); 
    
    // stockage des résultats de la requête dans une variable
    $execution = $query->execute(array(
        'pseudo_client' => $pseudo,
    ));

    // si l'exécution a lieu, on compare si le mdp du champ correspond à celui de la BDD
    if ($execution){
        $user=$query->fetch();
        if (password_verify($mdp, $user['mdp_client'])){
            // création d'un cookie qui affiche le prénom du client sur son compte
            setcookie("username",$user['prenom_client']);
            echo "<script type='text/javascript'>window.location.replace('../controler/controlerCompteConnect.php');</script>";
        }else{
            echo "<script type='text/javascript'>alert('Erreur de saisie, veuillez retaper le formulaire.');</script>";
            echo "<script type='text/javascript'>window.location.replace('../vue/vueConnexion.php');</script>";
        }
    
    }
    // si l'exécution échoue, un message d'erreur s'affiche
    } catch (EXCEPTION $e) {
        die("erreur de connexion");
}

?>