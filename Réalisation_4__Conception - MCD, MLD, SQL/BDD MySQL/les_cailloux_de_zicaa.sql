drop database if exists les_cailloux_de_zicaa;
create database les_cailloux_de_zicaa;
use les_cailloux_de_zicaa;

create table utilisateur(
id_utilisateur int auto_increment primary key,
identifiant_utilisateur varchar(50)
);

create table droits(
   id_droits INT,
   id_utilisateur INT,
   PRIMARY KEY(id_droits, id_utilisateur)
);

alter table droits
add constraint fk_id_utilisateur foreign key (id_utilisateur)
references utilisateur(id_utilisateur);

create table administrateur(
id_admin int auto_increment primary key,
nom_admin varchar(50),
prenom_admin varchar(50),
email_admin varchar(50),
telephone_admin varchar(50),
adresse_admin varchar (50),
CP_admin int,
ville_admin varchar (50)
);

create table client(
   id_client int auto_increment primary key,
   id_adresse_livraison int,
   nom_client varchar(50),
   prenom_client varchar(50),
   email_client varchar(50),
   telephone_client varchar(50),
   adresse_client varchar (50),
   CP_client int,
   ville_client varchar (50)
);

alter table client
add constraint fk_client_id_adresse_livraison foreign key (id_adresse_livraison)
references client(id_client);

create table livraison(
id_client int auto_increment primary key,
nom_client varchar(50),
prenom_client varchar(50),
adresse_livraison varchar (50),
CP_livraison int,
ville_livraison varchar (50)
);

create table fournisseur(
id_fournisseur int auto_increment primary key,
id_admin int,
nom_fournisseur varchar(50),
prenom_fournisseur varchar(50),
email_fournisseur varchar(50),
telephone_fournisseur varchar(50),
adresse_fournisseur varchar (50),
CP_fournisseur int,
ville_fournisseur varchar (50)
);

alter table fournisseur
add constraint fk_fournisseur_id_admin foreign key (id_admin)
references fournisseur(id_fournisseur);

create table formulaire(
id_formulaire int auto_increment primary key,
id_client varchar(50),
nom_contact varchar (50),
prenom_contact varchar(50),
email_contact varchar(50),
demande text,
id_admin int not null
);

alter table formulaire
add constraint fk_formulaire_id_admin foreign key (id_admin)
references formulaire(id_formulaire);

create table produit(
id_produit int auto_increment primary key,
nom_produit varchar(50),
type_produit varchar(50),
prix_produit int,
id_admin int
);

alter table produit
add constraint fk_produit_id_admin foreign key (id_admin)
references produit(id_produit);

create table categorie(
id_categorie int auto_increment primary key
);

create table image(
id_image int auto_increment primary key
);

create table stocks(
id_stocks int auto_increment primary key,
id_produit int,
nom_produit varchar(50),
type_produit varchar(50),
prix_produit int,
quantite_produit int,
id_admin int
);

alter table stocks
add constraint fk_stocks_id_admin foreign key (id_admin)
references stocks(id_stocks);

create table avantages(
id_avantages int auto_increment primary key,
id_client int,
id_promotion int,
montant_promotion int,
prix_final int
);

create table promotion(
id_promotion int auto_increment primary key,
id_client int,
montant_promotion int,
prix_final int,
id_admin int
);

alter table promotion
add constraint fk_promotion_id_admin foreign key (id_admin)
references promotion(id_promotion);

create table commande(
id_commande int auto_increment primary key,
id_client int,
id_produit int,
numero_commande int,
nom_client varchar (50),
prenom_client varchar (50),
adresse_client varchar (50),
CP_client int,
ville_client varchar (50),
montant_commande int,
quantite_produit int,
prix_final int
);

alter table commande
add constraint fk_commande_id_client foreign key (id_client)
references commande(id_commande);

create table paiement(
id_paiement int auto_increment primary key,
paiement_cb varchar (50),
paiement_paypal varchar (50)
);

create table contacter(
id_client int,
   id_formulaire INT,
   PRIMARY KEY(id_client, id_formulaire)
);

create table bénéficier(
id_client int,
   id_avantage INT,
   id_promotion INT,
   PRIMARY KEY(id_client, id_avantage, id_promotion)
);

create table stocker(
id_produit int,
   id_stock INT,
   PRIMARY KEY(id_produit, id_stock)
);

create table acheter(
id_client int,
   id_produit INT,
   PRIMARY KEY(id_client, id_produit)
);

create table fournir(
id_fournisseur int,
   id_produit INT,
   PRIMARY KEY(id_fournisseur, id_produit)
);

create table editer(
id_admin int,
   id_commande INT,
   id_client INT,
   id_produit INT,
   PRIMARY KEY(id_admin, id_commande, id_client, id_produit)
);

create table regler(
id_paiement int,
   id_commande INT,
   id_client INT,
   id_produit INT,
   PRIMARY KEY(id_paiement, id_commande, id_client, id_produit)
);

create table avoir(
id_produit int,
   id_categorie INT,
   id_image INT,
   PRIMARY KEY(id_produit, id_categorie, id_image)
);
