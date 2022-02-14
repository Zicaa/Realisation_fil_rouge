<?php
    session_start();
    require_once 'config.php';

    if(isset ($_POST['email']) && isset ($_POST['pass']))
    {
        $email = htmlspecialchars($_POST['email']);
        $pass = htmlspecialchars($_POST['pass']);

        $check = $bdd->prepare('SELECT pseudo_client, email_client, mdp_client FROM client WHERE email = ?');
        $check->execute(array($email));
        $data = $check->fetch();
        $row = $check->rowCount();

        if($row == 1)
        {
            if(filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                $password = hash('sha256', $password);

                if(data ['password'] === $password)
                {
                    $_SESSION['client'] = $data['pseudo'];
                    header('location:landing.php');
                }else header('location:index.php?login_err=password');
            }else header('location:index.php?login_err=email');
        }else header('location:index.php?login_err=already');
    }else header('location:index.php');