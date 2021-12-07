/*---------------------------------------------------------
                        Variables
-----------------------------------------------------------*/

//variables -> composants html
document.getElementsByClassName("jouerBanque")[0].addEventListener("click",jouerBanque);
document.getElementsByClassName("jouerJoueur")[0].addEventListener("click",jouerJoueur);
document.getElementsByClassName("jouerBanque")[0].classList.add("btJ");
document.getElementsByClassName("jouerJoueur")[0].classList.add("btJ");
//variables compteur
let deck;

/*---------------------------------------------------------
                    jeux de cartes
-----------------------------------------------------------*/
//cartes de coeur
let asCoeur = [11, 'as de coeur'];
let deuxCoeur = [2, '2 de coeur'];
let troisCoeur = [3, '3 de coeur'];
let quatreCoeur = [4, '4 de coeur'];
let cinqCoeur = [5, '5 de coeur'];
let sixCoeur = [6, '6 de coeur'];
let septCoeur = [7, '7 de coeur'];
let huitCoeur = [8, '8 de coeur'];
let neufCoeur = [9, '9 de coeur'];
let dixCoeur = [10, '10 de coeur'];
let valetCoeur = [10, 'valet de coeur'];
let dameCoeur = [10, 'dame de coeur'];
let roiCoeur = [10, 'roi de coeur'];

//cartes de trèfle
let asTrefle = [11, 'as de trèfle'];
let deuxTrefle = [2, '2 de trèfle'];
let troisTrefle = [3, '3 de trèfle'];
let quatreTrefle = [4, '4 de trèfle'];
let cinqTrefle = [5, '5 de trèfle'];
let sixTrefle = [6, '6 de trèfle'];
let septTrefle = [7, '7 de trèfle'];
let huitTrefle = [8, '8 de trèfle'];
let neufTrefle = [9, '9 de trèfle'];
let dixTrefle = [10, '10 de trèfle'];
let valetTrefle = [10, 'valet de trèfle'];
let dameTrefle = [10, 'dame de trèfle'];
let roiTrefle = [10, 'roi de trèfle'];

//cartes de carreau
let asCarreau = [11, 'as de carreau']; 
let deuxCarreau = [2, '2 de carreau'];
let troisCarreau = [3, '3 de carreau'];
let quatreCarreau = [4, '4 de carreau'];
let cinqCarreau = [5, '5 de carreau'];
let sixCarreau = [6, '6 de carreau'];
let septCarreau = [7, '7 de carreau'];
let huitCarreau = [8, '8 de carreau'];
let neufCarreau = [9, '9 de carreau'];
let dixCarreau = [10, '10 de carreau'];
let valetCarreau = [10, 'valet de carreau'];
let dameCarreau = [10, 'dame de carreau'];
let roiCarreau = [10, 'roi de carreau'];

//cartes de pique
let asPique = [11, 'as de pique'];
let deuxPique = [2, '2 de pique'];
let troisPique = [3, '3 de pique'];
let quatrePique = [4, '4 de pique'];
let cinqPique = [5, '5 de pique'];
let sixPique = [6, '6 de pique'];
let septPique = [7, '7 de pique'];
let huitPique = [8, '8 de pique'];
let neufPique = [9, '9 de pique'];
let dixPique = [10, '10 de pique'];
let valetPique = [10, 'valet de pique'];
let damePique = [10, 'dame de pique'];
let roiPique = [10, 'roi de pique'];

//jeux de cartes complet
let jeux = [asCoeur, deuxCoeur, troisCoeur, quatreCoeur, cinqCoeur, sixCoeur, 
septCoeur, huitCoeur, neufCoeur, dixCoeur, valetCoeur, dameCoeur, roiCoeur, 
asTrefle, deuxTrefle, troisTrefle, quatreTrefle, cinqTrefle, sixTrefle, 
septTrefle, huitTrefle, neufTrefle, dixTrefle, valetTrefle, dameTrefle, roiTrefle,  
asCarreau, deuxCarreau, troisCarreau, quatreCarreau, cinqCarreau, sixCarreau, 
septCarreau, huitCarreau, neufCarreau, dixCarreau, valetCarreau, dameCarreau, roiCarreau, 
asPique, deuxPique, troisPique, quatrePique, cinqPique, sixPique, septPique,
huitPique, neufPique, dixPique, valetPique, damePique, roiPique];

let suits = ["pique", "trefle", "carreau", "coeur"];
let values = ["11","2","3","4","5","6","7","8","9","10","10","10","10"];
/*---------------------------------------------------------
                        Fonctions
-----------------------------------------------------------*/
//fonction créer cartes
function creerCartes(){
    deck =[];
    for(let suit in suits) {
        for (let value in values) {
            deck.push(`${values[value]} de ${suits[suit]}`);
        }
    }
    //console.log(deck);
    return deck;
};
/*console.log(creerCartes());*/

//fontion qui retourne un nombre entre 0 et 51
function melange(){
    deck = creerCartes();
    let nombreCartes = deck.length, alea;

    while(nombreCartes){
        alea=Math.floor(Math.random()*nombreCartes--);
        [deck[nombreCartes], deck[alea]] = [deck[alea], deck[nombreCartes]];
    }
    return deck;
}
/*console.log(melange());*/

//fonction lancer carte banque
function jouerBanque() {
    deck = melange();
    let mainJoueur = []; let mainBanque = [];
    mainJoueur.push(deck.pop()); mainJoueur.push(deck.pop());
    mainBanque.push(deck.pop()); mainBanque.push(deck.pop());
    console.log(`Banque: ${mainBanque[0]}, ${mainBanque[1]}`)
    document.querySelector(".joueur h3").innerHTML = `Score du joueur (${calculMain(mainJoueur)})`;
    document.querySelector(".banque h3").innerHTML = `Score de la banque (${calculMain(mainBanque)})`;
}

//fonction lancer carte joueur
function jouerJoueur() {
    deck = melange();
    let mainJoueur = []; let mainBanque = [];
    mainJoueur.push(deck.pop()); mainJoueur.push(deck.pop());
    mainBanque.push(deck.pop()); mainBanque.push(deck.pop());
    console.log(`Joueur: ${mainJoueur[0]}, ${mainJoueur[1]}`)
    document.querySelector(".joueur h3").innerHTML = `Score du joueur (${calculMain(mainJoueur)})`;
    document.querySelector(".banque h3").innerHTML = `Score de la banque (${calculMain(mainBanque)})`;
}


//fonction reset de l'interface
function reset(){};

//fonction afficher les cartes dans le navigateur
/*function convertValues(values){
    let hand = [];
    for (card in values)
    let cardValues=values[card].split(" ")[0];
    switch (cardValues){
        case`A`:
        hand.push(11); break;
        case`2`:
        hand.push(2); break;
        case`3`:
        hand.push(3); break;
        case`4`:
        hand.push(4); break;
        case`5`:
        hand.push(5); break;
        case`6`:
        hand.push(6); break;
        case`7`:
        hand.push(7); break;
        case`8`:
        hand.push(8); break;
        case`9`:
        hand.push(9); break;
        case`10`:
        hand.push(10); break;
        case`V`:
        hand.push(10); break;
        case`D`:
        hand.push(10); break;
        case`R`:
        hand.push(10); break;
    }
    return hand;
}console.log(cardValue());*/


function calculMain(){
    let handValue = 0;
    let cards =0;
    for (values in cards){
        if (cards[value] ==1){
            handValue +=11;
            continue;
        }
        handValue += values[0]+values[0];
    }
    return handValue;
}
/*---------------------------------------------------------
                    Ecouteurs d'évènements
-----------------------------------------------------------*/


/*---------------------------------------------------------
                            Code
-----------------------------------------------------------*/


