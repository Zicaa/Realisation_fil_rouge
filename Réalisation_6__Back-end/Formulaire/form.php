<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <p>veuillez saisir le prix Hors Taxe :</p>
        <input type="number" name="HT">
        <br>
        <p>veuillez saisir Le nombre d'articles :</p>
        <input type="number" name="nbr">
        <br>
        <p>veuillez saisir Le taux de  TVA (en  %) :</p>
        <input type="number" name="TVA">
        <br>
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>

<?php
    if (isset($_POST['HT'])&& isset($_POST['nbr'])&& isset($_POST['TVA'])) {
        $HT = $_POST['HT'];
        $nbr = $_POST['nbr'];
        $TVA = $_POST['TVA']/100;
        $TTC = ($HT+($HT*$TVA))*$nbr;
        echo "la somme est égale à : ".$TTC."";
    }
?>