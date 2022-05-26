<?php
    // importer fichier contenant la classe vehicule
    require 'vehicule.php';

    // création d'un objet vehicule à partir de la classe vehicule
    $voiture = new Vehicule();

    $moto = new Vehicule();

    // ajout de valeur aux attributs
    //1 pour la voiture
    $voiture->nomVehicule  = "Fiat ";
    $voiture->nbrRoue = 4;
    $voiture->vitesse = 250;

    //2 pour la moto
    $moto->nomVehicule = "Yamaha";
    $moto->nbrRoue = 2;
    $moto->vitesse = 250;

    // utilisation de la méthode demarrer sur instance $voiture de Vehicule
    $voiture->demarrer();
    // utilisation de la méthode demarrer sur instance $moto de Vehicule
    $moto->demarrer();

    echo "<p>".$voiture->detect()."</p>";
    echo "<p>".$moto->detect()."</p>";

    echo "<p>".$voiture->boost()."</p>";
    echo "<p>Ma nouvelle vitesse max est de : ".$moto->boost()." km/h</p>";

    $res = $moto->plusRapide($voiture);
    echo "<p>".$res."</p>";


    $voiture2 = new Vehicule();
    $voiture2->nomVehicule  = "fiat 500";
    $voiture2->nbrRoue = 4;
    $voiture2->vitesse = 440;

    $voiture3 = new Vehicule();
    $voiture3->nomVehicule  = "Ford";
    $voiture3->nbrRoue = 4;
    $voiture3->vitesse = 310;

    $voiture4 = new Vehicule();
    $voiture4->nomVehicule  = "Peugeot";
    $voiture4->nbrRoue = 4;
    $voiture4->vitesse = 180;

    $tabVoitures = array($voiture, $voiture2, $voiture3, $voiture4);

    $resu = $voiture->plusRapideVersTab($tabVoitures);
    echo "<p>".$resu->nomVehicule."</p>";
?>