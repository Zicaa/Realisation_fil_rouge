<?php

// requête préparée exercice task 3

if(isset($_POST['name_user'])&& isset($_POST['first_name_user'])&& isset($_POST['login_user'])&& isset($_POST['mdp_user'])){
    $name_user = $_POST['name_user'];
    $first_name_user = $_POST['first_name_user'];
    $login_user = $_POST['login_user'];
    $mdp_user = $_POST['mdp_user'];
    echo "$name_user $first_name_user $login_user $mdp_user ont bien été créés";
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