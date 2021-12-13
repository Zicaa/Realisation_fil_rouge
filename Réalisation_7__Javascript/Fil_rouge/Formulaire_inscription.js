// Chercher les différents éléments de botre page

const pages = document.querySelectorAll(".page")
const header = document.querySelector("header")
const nbPages = pages.length // Nombres de pages du formulaire
let pageActive = 1

console.log(nbPages)

// On attend le chargement de la page
window.onload = () => {
    // On affiche la première page du formulaire
    document.querySelector(".page").style.display = "initial"
    // On affiche les numéros des pages dans l'entête
    // On parcours la liste des pages
    pages.forEach((page, formulaire_inscription) => {
        // On créé l'élément "numéro de page"
        let element = document.createElement("div")
        element.classList.add("page-num")
        if(pageActive == formulaire_inscription+1){
            element.classList.add("active")
        }
        element.innerHTML = formulaire_inscription+1
        header.appendChild(element)
    })

    // On gère les boutons "suivant"
    let boutons = document.querySelectorAll("button[type=button]")

    for(let bouton of boutons){
        bouton.addEventListener("click", pageSuivante);
    }
}

/* Cette fonction fait avancer le formulaire d'une page */

function pageSuivante(){
    // On incrémente pageActive pour dire qu'on passe à la page suivante
    pageActive++
    // On masque toutes les pages
    for(let page of pages){
        page.style.display = "none"
    }

    // On affiche la page suivante
    this.parentElement.nextElementSibling.style.display = "initial"
}
