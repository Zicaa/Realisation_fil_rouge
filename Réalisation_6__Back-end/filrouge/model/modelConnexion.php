<?php

try{
    $query = $database->query('SELECT * FROM client');

    $check = false;

    while($data = $query->fetch()){
        if($data['pseudo_client'] == $login && $data['mdp_client'] == $mdp){
            $check = true;
        } 
    }

    if($check == true){
        header('Location: ../controler/controlerCompte.php');
    } else {
        echo "<script type='text/javascript'>alert('Login ou mot de passe incorrect!');</script>";
    }

} catch(Exception $e){
            die('Erreur : ' .$e->getMessage());
}

?>