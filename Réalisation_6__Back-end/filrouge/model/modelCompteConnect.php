<?php
// condition qui vérifie si le prénom stocké dans le cookie est renseigné
if(isset($_COOKIE["username"]))
{
    // afficher le prénom du client dans une alerte et l'insérer dans mon H1
    echo "<script type='text/javascript'>alert('Bienvenue ". $_COOKIE["username"] ."');</script>";
    echo "<script type='text/javascript'>
    const titre=document.getElementById('bienvenue');
    titre.innerHTML='Bienvenue ". $_COOKIE["username"] ."';
    </script>";

//sinon afficher une alerte "bienvenue cher client"
}else{
    echo "<script type='text/javascript'>alert('Bienvenue cher client');</script>";
}

?>