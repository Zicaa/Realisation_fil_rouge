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
    </body>
</html>