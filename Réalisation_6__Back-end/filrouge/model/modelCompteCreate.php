<?php

if(isset($_COOKIE["username"]))
{
    echo "<script type='text/javascript'>alert('Bienvenue sur votre compte');</script>";
    echo "<script type='text/javascript'>
    const titre=document.getElementById('bienvenue');
    titre.innerHTML='Bienvenue sur votre compte';
    </script>";

}

?>