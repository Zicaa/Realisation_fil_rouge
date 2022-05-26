<?php

    //ajout de la vue
    include('vue_article.php');

    //connexion à la bdd
    include('connect.php');

    //test existence des champs du formulaire
    if (isset($_POST['nom_article'])&& isset($_POST['contenu_article'])) {
        //création des 2 variables pour récupérer le contenu des super globales $_POST
        $name = $_POST['nom_article'];
        $content = $_POST['contenu_article'];

        //ajout du model article
        include('model_article.php');
    } else {
        echo"<p>Veuillez remplir tous les champs du formulaire</p>";
    }
?>