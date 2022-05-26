<?php

// requête préparée exercice articles 2

    $bdd = new PDO('mysql:host=localhost;dbname=articles', 'root', '', 
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    $bdd->exec("set names utf8");
    try{
        //requête pour récupérer tous les articles
        $reponse = $bdd->prepare('SELECT * FROM article');
        $resultat = $reponse->execute();
        //boucle pour parcourir tableau et afficher le contenu de chaque ligne de la table
        while($donnees = $reponse->fetch()){
            //affichage des données
            echo'<p><h2>La liste des articles : </h2></p>'.$donnees['nom_article'].' '.$donnees['contenu_article'].'</p>';
        }
    } catch(exception $e) {
        die("erreur :" .$e->getMessage());
    }

?>