<?php

    //ajout de la vue
    include('vue_createUserTask.php');

    //connexion à la bdd
    include('connectTask.php');

    //test existence des champs du formulaire
    if (isset($_POST['name_user'])&& 
    isset($_POST['first_name_user'])&&
    isset($_POST['login_user'])&&
    isset($_POST['mdp_user'])) {
        $name_user = $_POST['name_user'];
        $first_name_user = $_POST['first_name_user'];
        $login_user = $_POST['login_user'];
        $mdp_user = $_POST['mdp_user'];

        //ajout du model task
        include('model_createUserTask.php');
    } else {
        echo"<p>Veuillez remplir tous les champs du formulaire</p>";
    }
?>