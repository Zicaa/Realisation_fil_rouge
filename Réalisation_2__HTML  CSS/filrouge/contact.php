<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Contact</title>
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
                        <li><div class="panier"><img src="../images/outline.png">Mon panier</li></div>
                    </ul>       
                </nav>
            </aside>
        <fieldset>
            <legend><h1>Contactez-nous</h1></legend>
            <form method= "POST" action="monProgramme.php">
                <label for="name">Nom <div id="asterisques">*</label>
                <input type= "text" name= "Nom" size= "20" placeholder="Ex : Marie DUPONT" minlength="2" maxlength="20"id="nom"/></imput>
            </div></form>
            <form method= "POST" action="monProgramme.php">
                <label for="email">Email <div id="asterisques">*</label>
                <input type= "email" name= "Email" size= "20" placeholder="Ex : myEmail@fai.com" minlength="2"maxlength="30"id="email"/></imput>
            </div></form>
            <form method= "POST" action="monProgramme.php">
                <label for="texte"> Laissez un commentaire : </label></br>
                <textarea placeholder="tapez ici votre texte"rows="10" cols="70">tapez ici votre texte</textarea>
            </form>
            <form method= "POST" action="monProgramme.php">
                <input type="checkbox" id="checkbox" checked><label for="texte">Envoyer une copie par Email</label></br>
            </form>
            <form method= "POST" action="monProgramme.php">
                <input type="submit" value="Envoyer"/>
                <input type="reset" value="Reset"/>
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