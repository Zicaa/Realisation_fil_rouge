const items = document.querySelectorAll("img");
const nbSlide = items.length;
const suivant = document.querySelector(".right");
const precedent = document.querySelector(".left");
let compteur = 16;

// je crée ma fonction qui incrémente chaque image de 1
function slideSuivante(){
    items[compteur].classList.remove("active");

    if(compteur < nbSlide-1){
        compteur++;
    }else{
        compteur = 0;
    }

    items[compteur].classList.add("active")
    console.log(compteur);
}
suivant.addEventListener("click", slideSuivante)

// je crée ma fonction qui décrémente chaque image de 1
function slidePrecedente(){
    items[compteur].classList.remove("active");

    if(compteur >0){
        compteur--;
    }else{
        compteur = nbSlide -1;
    }

    items[compteur].classList.add("active")
    console.log(compteur);
}
precedent.addEventListener("click", slidePrecedente)