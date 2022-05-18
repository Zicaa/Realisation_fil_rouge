const pages = document.querySelectorAll(".page")
const header = document.querySelector("header")
const nbPages = pages.length 
let pageActive = 1

console.log(nbPages)

// 1 AJOUT DES NUMEROS DE PAGE DANS LE HEADER

window.onload = () => {
    document.querySelector(".page").style.display = "initial"
    pages.forEach((page, formulaire_inscription) => {
        let element = document.createElement("div")
        element.classList.add("page-num") 
        element.id = "num" + (formulaire_inscription +1)
        // Je vérifie si ma page active correspond à mon index + 1
        if(pageActive == formulaire_inscription+1){
            element.classList.add("active")
        }
        // J'ajoute les éléments du header dans ma page
        element.innerHTML = formulaire_inscription+1
        header.appendChild(element)
    })

    // 2 GESTION DES BOUTONS ET DE L'ANIMATION

    let boutons = document.querySelectorAll(".next")
    for(let bouton of boutons){
        bouton.addEventListener("click", pageSuivante);
    }

    boutons = document.querySelectorAll(".prev")
    for(let bouton of boutons){
        bouton.addEventListener("click", pagePrecedente);
    }
}

/* Cette fonction fait avancer le formulaire d'une page */
function pageSuivante(){
    for(let page of pages){
        page.style.display = "none"
    }
    this.parentElement.nextElementSibling.style.display = "initial"
    document.querySelector(".active").classList.remove("active")
    pageActive+
    document.querySelector("#num"+pageActive).classList.add("active")
}

/* Cette fonction fait reculer le formulaire d'une page */
function pagePrecedente(){
    for(let page of pages){
        page.style.display = "none"
    }
    this.parentElement.previousElementSibling.style.display = "initial"
    document.querySelector(".active").classList.remove("active")
    pageActive-
    document.querySelector("#num"+pageActive).classList.add("active")
}
