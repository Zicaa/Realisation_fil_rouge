<?php

try{
    $response = $database->query('SELECT * FROM utilisateur');

    foreach($response as $data){
        $datas = array($response->fetch());
        // if($data['login_utilisateur'] == $login && $data['mdp_utilisateur'] == $mdp){
        //     echo "Connexion réussie";
        //     header('Location: http://localhost/librairie/pageStocks.php');
        // } else {
        //     echo "L'un des champs est incorrect";
        // }
    }

    var_dump($datas);

    if($data['login_utilisateur'] == $login && $data['mdp_utilisateur'] == $mdp){
        echo "Connexion réussie";
        header('Location: http://localhost/librairie/pageStocks.php');
    } else {
        echo "L'un des champs est incorrect";
    }
} catch(Exception $e){
    die('Erreur : ' .$e->getMessage());
}

?>