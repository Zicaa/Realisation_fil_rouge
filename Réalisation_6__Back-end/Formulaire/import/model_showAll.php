<?php
try {
        
        $req = $bdd->prepare(
            'SELECT
                *
            FROM 
                article'
        );
        $req->execute();
        while($donnees = $req->fetch()){
            echo '<section>
                    <h5>'.$donnees['id_article'].'</h5>
                    <h4>'.$donnees['nom_article'].'</h4>
                    <p>'.$donnees['contenu_article'].'</p>
                </section>
                <br>';
        } 
    } catch(Exception $e) {
        die('Erreur : ' .$e->getMessage());
    }
    ?>