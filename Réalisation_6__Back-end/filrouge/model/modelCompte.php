<?php

    try{
        while($data =$query->fetch()){
            if($data['stock_livre'] == 1){
                $data['stock_livre'] = "En stock";
            } else{
                $data['stock_livre'] = "Indisponible";
            }

            echo 
                '<div>
                    <img src="'.$data['img_livre'].'"></img>
                    <section>
                        <p><strong>Titre:</strong> '.$data['titre_livre'].'</p>
                        <p><strong>Auteur:</strong> '.$data['auteur_livre'].'</p>
                        <p><strong>Éditeur:</strong> '.$data['editeur_livre'].'</p>
                        <p><strong>Nombre de pages:</strong> '.$data['nbr_pages_livre'].'</p>
                        <p><strong>Prix:</strong> '.$data['prix_livre'].'€</p>
                        <p><strong>Stock:</strong> '.$data['stock_livre'].'</p>
                        <p><strong>État:</strong> '.$data['nom_etat'].'</p>
                        <p><strong>Genre:</strong> '.$data['nom_genre'].'</p>
                    </section> 
                </div>';
        }
    } catch(Exception $e){
            die('Erreur : ' .$e->getMessage());
    }
    
?>