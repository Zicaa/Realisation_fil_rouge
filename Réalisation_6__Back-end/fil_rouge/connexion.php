<?php
    session_start();
    require_once 'config.php';

    if(isset($_POST['nom']) 
    && isset ($_POST['prenom'])
    && isset ($_POST['adresse'])
    && isset ($_POST['CP'])
    && isset ($_POST['ville'])
    && isset ($_POST['tel'])
    && isset ($_POST['email'])
    && isset ($_POST['pseudo'])
    && isset ($_POST['pass']))
    {
        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $adresse = htmlspecialchars($_POST['adresse']);
        $CP = htmlspecialchars($_POST['CP']);
        $ville = htmlspecialchars($_POST['ville']);
        $tel = htmlspecialchars($_POST['tel']);
        $email = htmlspecialchars($_POST['email']);
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $pass = htmlspecialchars($_POST['pass']);

        $check = $bdd->prepare('SELECT pseudo_client, email_client, mdp_client FROM client WHERE email = ?');
        $check->execute(array($email));
        $data = $check->fetch();
        $row = $check->rowCount();

        if($row == 1)
        {

        }else header('location:index.php?login_err=already');


    }else header('location:index.php');