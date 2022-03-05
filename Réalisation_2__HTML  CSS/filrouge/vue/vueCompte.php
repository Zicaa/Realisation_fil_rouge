<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compte</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>

        body{
            display: grid;
            grid-template-columns: repeat(1fr, 1fr, 1fr);
        }

        nav{
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #645244;
            display: flex;
            flex-direction: row;
        }

        ul{
            position: absolute;
            margin-top: 2em;
            margin-left: 2.5em;
            list-style: none;
            text-decoration: none;
            flex-direction: row;
        }

        input{
            width: 100%;
            margin: 8px 0;
            padding: 10px;
            border-radius: 10px;
            background-color: #645244;
            color: white;
            cursor: pointer;
        }

        input:hover{
            background-color: #F05D23; 
            color: white;
        }

        div{
            width: 100%;
            margin: 2em;
        }

        div img{
            width: 100%;
            margin: 2em;
        }

        section{
            padding: 2em;
        }

        p{
            margin: 0;
        }

    </style>
</head>
<body>
    <nav>
        <ul>
            <li><img src="../images/Logo.svg" id="logo" alt="logo"></li>
            <li><a href="../controler/controlerCompte.php"><input type="submit" value="Mon compte"></a></li>
            <li><a href="../controler/controlerConnexion.php"><input type="submit" value="Se déconnecter"></a></li>
        </ul>
    </nav>
</body>
</html>