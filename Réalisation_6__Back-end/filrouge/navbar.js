// je cherche ma barre de navigation dans ma page
const navigation = document.querySelector("aside");

// j'ajoute un écouteur d'évènement au scroll
window.addEventListener("scroll",()=> {

    // si le scroll est supérieur à 30 pixels, j'ajoute la class "anim-nav" à mon aside
    if(window.scrollY>30){
        navigation.classList.add("anim-nav");
    // sinon je supprime la class "anime-nav"
    }else {
        navigation.classList.remove("anim-nav");
    }
})