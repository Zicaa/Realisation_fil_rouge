<?php

try{
    $query = $database->query('SELECT * FROM utilisateur');

    $check = false;

    while($data = $query->fetch()){
        if($data['login_utilisateur'] == $login && $data['mdp_utilisateur'] == $mdp){
            $check = true;
        } 
    }

    if($check == true){
        header('Location: ../controler/controlerStocks.php');
    } else {
        echo "<script type='text/javascript'>alert('Login ou mot de passe incorrect!');</script>";
    }

} catch(Exception $e){
            die('Erreur : ' .$e->getMessage());
}

?>