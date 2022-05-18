<?php

require '../vue/vueConnexion.php';

require '../config/connectDatabase.php';

    if(isset($_POST['pseudo'])
    && isset($_POST['mdp']));
    
{

        $pseudo = $_POST['pseudo'];
        $mdp = $_POST['mdp'];

require '../model/modelConnexion.php';
}

?>