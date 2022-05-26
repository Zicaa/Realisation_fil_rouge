<?php
    /*-----------------------------------------------------
    Test (import du fichier) :
    -----------------------------------------------------*/
    //test si le fichier importé existe
    if(isset($_FILES['file'])){
        //stocke le chemin et le nom temporaire du fichier importé (ex /tmp/125423.pdf)
        $tmpName = $_FILES['file']['tmp_name'];
        //stocke le nom du fichier (nom du fichier et son extension importé ex : test.jpg)
        $name = $_FILES['file']['name'];
        //stocke la taille du fichier en octets
        $size = $_FILES['file']['size'];
        //stocke les erreurs (pb d'import, pb de droits etc...)
        $error = $_FILES['file']['error'];
        //déplacer le fichier importé dans le dossier image à la racine du projet
        $fichier = move_uploaded_file($tmpName, "./image/$name");
        if($fichier){
            echo "<h5>Chargement réussi</h5>";
        } else {
            echo "erreur de chargement veuillez recommencer"
;        }
    }


    /*-----------------------------------------------------
    Formulaire HTML :
    -----------------------------------------------------*/
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Import d'image</title>
</head>
<body>
    <form action="" method="post">
        <p>importer une image :</p>
        <br>
        <input type="file" name="file">
        <br>
        <input type="submit" value="Importer">
        <br>
    </form>
</body>
</html>