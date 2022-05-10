// Je cherche les différents éléments de la page
const pages = document.querySelectorAll(".page")
const header = document.querySelector("header")
const nbPages = pages.length // Nombres de pages du formulaire
let pageActive = 1

console.log(nbPages)

// 1 AJOUT DES NUMEROS DE PAGE DANS LE HEADER

// J'attend le chargement de la page
window.onload = () => {
    // J'affiche la première page du formulaire
    document.querySelector(".page").style.display = "initial"
    // J'affiche les numéros des pages dans l'entête :
    // je parcours la liste des pages avec forEach
    pages.forEach((page, formulaire_inscription) => {
        // Je créé l'élément "numéro de page"
        let element = document.createElement("div")
        // J'ajoute la classe "page-num"
        element.classList.add("page-num")
        // J'initialise mon numéro de page à mon index + 1 car index = 0
        // Je numérote mes éléments 
        element.id = "num" + (formulaire_inscription +1)
        // Je déclare ma variable pageActive et l'initialise à 1
        // Je vérifie si ma page active correspond à mon index + 1
        if(pageActive == formulaire_inscription+1){
            // J'ajoute la classe active à mon élément
            element.classList.add("active")
        }
        // J'ajoute les éléments du header dans ma page
        element.innerHTML = formulaire_inscription+1
        header.appendChild(element)
    })

    // 2 GESTION DES BOUTONS ET DE L'ANIMATION

    // Je sélectionne les boutons "suivant"
    let boutons = document.querySelectorAll(".next")
    // Je recherche le bouton utilisé parmis tous les boutons
    for(let bouton of boutons){
        // J'ajoute un écouteur d'évènement : 
        // au click sur ce bouton j'applique la fonction page suivante
        bouton.addEventListener("click", pageSuivante);
    }

    // Je sélectionne les boutons "précédent"
    boutons = document.querySelectorAll(".prev")
    // Je recherche le bouton utilisé parmis tous les boutons
    // J'ajoute un écouteur d'évènement : 
        // au click sur ce bouton j'applique la fonction page précédente
    for(let bouton of boutons){
        bouton.addEventListener("click", pagePrecedente);
    }
}

/* Cette fonction fait avancer le formulaire d'une page */
function pageSuivante(){
    // Je masque toutes les pages
    for(let page of pages){
        page.style.display = "none"
    }
    // J'affiche la page suivante en allant chercher la div parente et en sélectionnant la div parente suivante
    this.parentElement.nextElementSibling.style.display = "initial"
    // Je désactive la page active en supprimant la classe active à l'élément qui l'utilise
    document.querySelector(".active").classList.remove("active")
    // J'incrémente pageActive pour dire qu'on passe à la page suivante
    pageActive+
    // J'active le nouveau numéro de page en utilisant l'id "num"
    document.querySelector("#num"+pageActive).classList.add("active")
}

/* Cette fonction fait reculer le formulaire d'une page */
function pagePrecedente(){
    // Je masque toutes les pages
    for(let page of pages){
        page.style.display = "none"
    }
    // J'affiche la page précédente en allant chercher la div parente et en sélectionnant la div parente précédente
    this.parentElement.previousElementSibling.style.display = "initial"
    // Je désactive la page active en supprimant la classe active à l'élément qui l'utilise
    document.querySelector(".active").classList.remove("active")
    // Je décrémente pageActive pour dire qu'on passe à la page précédente
    pageActive-
    // J'active le nouveau numéro de page en utilisant l'id "num"
    document.querySelector("#num"+pageActive).classList.add("active")
}
