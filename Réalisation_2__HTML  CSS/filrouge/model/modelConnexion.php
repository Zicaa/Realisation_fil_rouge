<?php
 try {

    $query = $database->prepare("SELECT * FROM client WHERE
        pseudo_client = :pseudo_client"
    ); 
    
    $execution = $query->execute(array(
        'pseudo_client' => $pseudo,
    ));

    if ($execution){
        $user=$query->fetch();
        if (password_verify($mdp, $user['mdp_client'])){
            setcookie("username",$user['prenom_client']);
            echo "<script type='text/javascript'>window.location.replace('../controler/controlerCompteConnect.php');</script>";
        }else{
            echo "<script type='text/javascript'>alert('Erreur de saisie, veuillez retaper le formulaire.');</script>";
            echo "<script type='text/javascript'>window.location.replace('../vue/vueConnexion.php');</script>";
        }
    
    }
    } catch (EXCEPTION $e) {
        die("erreur de connexion");
}

?>