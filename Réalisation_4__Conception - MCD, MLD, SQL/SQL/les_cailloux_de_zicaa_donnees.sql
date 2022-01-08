use les_cailloux_de_zicaa;
insert into administrateur (id_admin, nom_admin, prenom_admin, email_admin, adresse_admin, CP_admin, ville_admin) values
("1","cresta", "zicaa","zikaha@hotmail.fr","16 rue condorcet","34110","frontignan");

insert into client (id_client, id_adresse_livraison, nom_client, prenom_client, email_client, telephone_client, adresse_client, CP_client, ville_client) values
("2", "20","dupont", "martin","dupont@hotmail.fr","0700000000","15 rue duclient","34000","montpellier"),
("3", "30","tartampion", "toto","toto@hotmail.fr","0600000000","15 rue delarueinvente","34000","montpellier");

insert into commande (id_commande, id_client, id_produit, nom_client, prenom_client, adresse_client, CP_client, ville_client, montant_commande, quantite_produit, prix_final) values
("2","2", "12", "dupont", "martin","15 rue duclient","34000","montpellier","15","1","20"),
("3","2", "12", "dupont", "martin","15 rue duclient","34000","montpellier","15","1","20");

insert into droits (id_droits, id_utilisateur) values
("1", "2");

insert into livraison (id_client, nom_client, prenom_client, adresse_livraison, CP_livraison, ville_livraison) values
("1", "dupont", "martin", "15 rue duclient","34000","montpellier"),
("3", "dupont", "martin", "15 rue duclient","34000","montpellier");

insert into paiement (id_paiement, paiement_cb, paiement_paypal) values
("1","paiement par cb","nul");

insert into produit (id_produit, nom_produit, type_produit, prix_produit, id_admin) values
("1","améthyste brute","pierre brute", "20", "1"),
("2","bague aventurine","bague", "30", "1"),
("3","citrine roulée","pierre roulée", "10", "1"),
("4","labradorite galet","galet", "40", "1"),
("5","géode améthyste","géode", "150", "1");

insert into utilisateur (id_utilisateur, identifiant_utilisateur) values
("1","identifiant1"),
("2","identifiant2"),
("3","identifiant3");