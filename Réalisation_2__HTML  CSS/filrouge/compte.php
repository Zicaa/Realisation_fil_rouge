<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Compte</title>
        <link rel="stylesheet" href="index.css">
        <link rel="stylesheet" href="responsive_index.css" media="only screen and (max-width:800px)">
    </head>
    <body>
        <header><!-- CSS en pleine page --></header>
            <aside>
                <nav class="liens">
                    <ul>
                        <li class="liens"><a href="index.php">ACCUEIL</a></li>
                        <li class="liens"><a href="boutique.php">BOUTIQUE</a></li>
                        <li class="liens"><a href="guide.php">GUIDE DES PIERRES</a></li>
                        <li class="liens"><a href="compte.php">MON COMPTE</a></li>
                        <li class="liens"><a href="reserves_API.html"target="_blank">RESERVES NATURELLES DE LA REGION</a></li>
                        <li><input type="search" id="site-search" name="q"aria-label="Search through site content"><button>Rechercher</button></li>
                        <li><div class="panier"><img src="../filrouge/images/outline.png">Mon panier</li></div>
                    </ul>       
                </nav>
            </aside>
        <body>
                <fieldset>
                    <legend><h1>Me connecter</h1></legend>
                    <form action="http://localhost/filrouge/vue/vueConnexion.php"method="get" target="_blank">
                        <button type="submit">Connexion</button>
                    </form>
                    </form>
                    <legend><h1>Créer mon compte</h1></legend>
                    <form action="http://localhost/filrouge/vue/vueInscription.php"method="get" target="_blank">
                        <button type="submit">Création du compte</button>
                        <div>
                            <img src ="Images/amethyst.png" alt="img"/>
                        </div>
                    </form>
                </fieldset>
            <footer>
                <nav>
                    <ul>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="mentions_legales.php">Mentions légales</a></li>
                        <li><a href="partenaire.php">Nos partenaires</a></li>
                    </ul>
                </nav>
                <script src="navbar.js"></script>
            </footer>
    </body>
</html>