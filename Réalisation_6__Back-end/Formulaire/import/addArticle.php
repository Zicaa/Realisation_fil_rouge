<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <p>Ajouter un article</p>
        <p>Nom de l'article</p>
        <input type="text" name="nom_article">
        <br>
        <p>Contenu</p>
        <input type="text" name="contenu_article">
        <br>
        <input type="submit" value="Ajouter">
    </form>
    <br>
    <form action="showAll.php" method="GET">
        <input type="submit" value="Afficher tous les articles">
    </form>
    <?php

        if (isset($_POST['nom_article'])&& isset($_POST['contenu_article'])) {
            $name = $_POST['nom_article'];
            $content = $_POST['contenu_article'];

            $bdd=new PDO('mysql:host=localhost;dbname=articles', 'root','', 
            array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

            $bdd->exec("set names utf8");
            try {
                $req = $bdd->prepare(
                    "INSERT INTO 
                        article 
                    SET 
                        nom_article = :name,
                        contenu_article = :content"
                );
                $resultat = $req->execute(
                    array(
                        ':name' => $name,
                        ':content' => $content
                    )
                );
                if ($resultat){
                    $req2 = $bdd->prepare(
                        'SELECT
                            *
                        FROM 
                            article 
                        WHERE 
                            nom_article = :name'
                    );
                    $req2->execute(
                        array(
                            'name' => $name
                        )
                    );
                    while($donnees = $req2->fetch()){
                        //affichage des donnes
                        echo '<p>Vous venez de créer : <h4>'.$donnees['nom_article'].'</h4>'.$donnees['contenu_article'].'</p>';
                    }
                } else {
                    echo "<p>Erreur lors de l'enregistrement</p>";
                }
            } catch(Exception $e) {
                die('Erreur : ' .$e->getMessage());
            }
        }
    ?>
</body>
</html>