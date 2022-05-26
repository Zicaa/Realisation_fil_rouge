<?php try {
                $req = $bdd->prepare(
                    "INSERT INTO 
                        user 
                    SET 
                        name_user = :name_user,
                        first_name_user = :first_name_user,
                        login_user = :login_user,
                        mdp_user = :mdp_user"
                );
                $resultat = $req->execute(
                    array(
                        ':name_user' => $name_user,
                        ':first_name_user' => $first_name_user,
                        ':login_user' => $login_user,
                        ':mdp_user' => $mdp_user
                    )
                );
                if ($resultat){
                    $req2 = $bdd->prepare(
                        'SELECT
                            *
                        FROM 
                            user 
                        WHERE 
                            name_user = :name_user'
                    );
                    $req2->execute(
                        array(
                            'name_user' => $name_user
                        )
                    );
                    while($donnees = $req2->fetch()){
                        //affichage des donnes
                        echo '<p>Vous venez de créer : 
                        '.$donnees['name_user'].'
                        '.$donnees['first_name_user'].'
                        '.$donnees['login_user'].'
                        '.$donnees['mdp_user'].'
                        </p>';
                    }
                } else {
                    echo "<p>Erreur lors de l'enregistrement</p>";
                }
                //je vais aller récupérer l'id du nouvel enregistrement
                $getUserId = $bdd->prepare('SELECT * FROM user WHERE name_user = :name_user');
                $getUserId->execute(array(':name_user' => $name_user));
                //je crée une variable
                $userId;
                while($oneUser = $getUserId->fetch()){
                    // je passe l'id à ma variable
                    $userId = $oneUser['id_user'];
                }
                $reqAll = $bdd->prepare('SELECT * FROM user');
                $reqAll->execute();
                while($allUsers = $reqAll->fetch()){
                    // j'affiche seulement si l'id qui vient d'être créer ne correspond pas aux données reçues
                    if($allUsers['id_user'] != $userId) {
                        echo '<p>
                        '.$allUsers['name_user'].'
                        '.$allUsers['first_name_user'].'
                        '.$allUsers['login_user'].'
                        '.$allUsers['mdp_user'].'
                        </p>';
                    }
                }
            } catch(Exception $e) {
                die('Erreur : ' .$e->getMessage());
            }
?>