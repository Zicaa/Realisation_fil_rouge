<?php
    //importer fichier contenant la calsse vehicule
    require 'vehicule.php';

    //creation d'un objet vehicule à partir de la class vehicule
    $voiture = new Vehicule();

    //ajout de valeur aux attributs
    $voiture-> nomVehicule = "Mercedes CLK";
    $voiture-> nbrRoue = 4;
    $voiture->vitesse = 250;

    //creation d'un objet moto à partir de la class vehicule
    $moto = new Vehicule();

    //ajout de valeur aux attributs
    $moto-> nomVehicule = "Honda CBR";
    $moto-> nbrRoue = 2;
    $moto->vitesse = 280;

    //utilisation de la méthode démarrer sur l'instance $voiture de vehicule
    $voiture->detect();

    //utilisation de la méthode démarrer sur l'instance $moto de vehicule
    $moto->detect();

    echo"<p>".$voiture->detect()."</p>";
    echo"<p>".$moto->detect()."</p>";
?>