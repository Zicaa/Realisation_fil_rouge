<?php

// requête simple
/*
if(isset($_POST['nom'])&& isset($_POST['prenom'])){
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    echo "$nom $prenom a bien été créé";
}
    $bdd = new PDO('mysql:host=localhost;dbname=test', 'root', '', 
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    $bdd->exec("set names utf8");
    $create = $bdd->query("INSERT INTO users set nom = '$nom', prenom = '$prenom';");

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
    }*/

    // requête préparée
    /*

    if(isset($_POST['nom'])&& isset($_POST['prenom'])){
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        echo "$nom $prenom a bien été créé";
    }
        $bdd = new PDO('mysql:host=localhost;dbname=test', 'root', '', 
        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    
        $bdd->exec("set names utf8");
        // je stocke dans une variable une requête qui va insérer les données
        $create = $bdd->prepare("INSERT INTO users set nom = '$nom', prenom = '$prenom';");
        // je stocke le résultat dans une autre variable
        $resultat = $create->execute(
            array(
                'nom' => $nom,
                'prenom' => $prenom
            )
            );
    
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
        }*/
        

// requête préparée exercice articles 1

if(isset($_POST['nom_article'])&& isset($_POST['contenu_article'])){
    $nom_article = $_POST['nom_article'];
    $contenu_article = $_POST['contenu_article'];
    echo "$nom_article $contenu_article ont bien été créés";
}
    $bdd = new PDO('mysql:host=localhost;dbname=articles', 'root', '', 
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    $bdd->exec("set names utf8");
    // je stocke dans une variable une requête qui va insérer les données
    $create = $bdd->prepare("INSERT INTO article set nom_article = '$nom_article', contenu_article = '$contenu_article';");
    // je stocke le résultat dans une autre variable
    $resultat = $create->execute(
        array(
            'nom_article' => $nom_article,
            'contenu_article' => $contenu_article
        )
        );

// requête préparée exercice articles 2 
/*

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
    */

?>