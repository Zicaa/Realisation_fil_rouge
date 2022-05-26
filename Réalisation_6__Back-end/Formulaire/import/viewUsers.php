<?php
    $bdd = new PDO('mysql:host=localhost;dbname=test', 'root', '', 
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    $bdd->exec("set names utf8");

    try{
        //requête pour stocker le contenu de la table users dans un tableau
        $reponse = $bdd->query('SELECT * FROM users');
        //boucle pour parcourir tableau et afficher le contenu de chaque ligne de la table
        while($donnees = $reponse->fetch()){
            //affichage des données
            echo'<p>'.$donnees['nom'].' '.$donnees['prenom'].' '.$donnees['age'].'</p>';
        }
    } catch(exception $e) {
        //die("erreur :" .$e->getMessage());
    }
?>