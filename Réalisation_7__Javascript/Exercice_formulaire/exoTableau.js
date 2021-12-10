const userlist = [
    {id: 1, prenom: "Aurélien", age: 35, role: "administrateur"},
    {id: 2, prenom: "Simon", age: 34, role: "User"},
    {id: 3, prenom: "Nico", age: 36, role: "User"},
    {id: 4, prenom: "Snake", age: 40, role: "User"},
];
let list = document.getElementById("usersList");
userlist.map(user => {
    // je crée une variable à chaque tour de boucle 
    // qui sera un nouvel element html ol (liste ordonnée)
    let newOl = document.createElement("ol");
    // je crée une condition pour varier les couleurs selon le role
    if (user.role == "administrateur"){
        newOl.style.color = "red";
    } else {
        newOl.style.color = "blue";
    }
    // j'ajoute le text à l'élément crée avec un template string
    newOl.textContent = 
        `ID: ${user.id};
        Prénom: ${user.prenom};
        Age: ${user.age};
        Role: ${user.role}`;
    // enfin j'ajoute cet élément à la variable qui fait appelle à la div.
    list.appendChild(newOl);
    newOl.addEventListener('mouseenter', event => {
        newOl.style.backgroundColor = "lightgray";
    });
    newOl.addEventListener('mouseleave', event => {
        newOl.style.backgroundColor = "white";
    });
    let btSupprimer = document.createElement("input");// 3.4
    // je lui donne ses attributs
    btSupprimer.setAttribute('type', "button");//3.4
    btSupprimer.setAttribute('value', "Supprimer");// 3.4
    //je pousse le bouton sur la ligne
    newOl.appendChild(btSupprimer); // 3.4
    // je place une écoute de clic du bouton pou supprimer la ligne
    btSupprimer.addEventListener('click', event => { // 3.4
    list.removeChild(newOl); //3.4
    }); //3.4

});

function creerForm() {
    /*document.getElementById("create").addEventListener("submit", function () {
    creerForm();*/
    let prenom = document.getElementById("forPrenom").value;
    let age = document.getElementById("forAge").value;
    let role = document.getElementById("forRole").value;
    let form = prenom+age+role;
    userlist.push= {"prenom":prenom, "age":age,"role":role};
    alert(form, userlist);
    console.log(userlist);
}
document.innerHTML = (creerForm([0],[1],[2]));

/*function resetForm() {
    document.getElementById("formulaire").reset();
};*/

/*list.appendChild(newOl);
let btn = document.createElement("BUTTON"); 
let t = document.createTextNode("SUPPRIMER");
btn.appendChild(t);                                
document.body.appendChild(btn);*/

/*let over = document.createElement("ul");
let test = document.getElementsByClassName("ul");
test.addEventListener("mouseenter", function( event ) {
event.target.style.color = "grey";
});

test.addEventListener("mouseleave", function( event ) {
  event.target.style.color = "white";
});

let over = document.createElement("ul");
document.querySelector(`ul`).addEventListener(`mouseenter`,entering);
document.querySelector(`ul`).addEventListener(`mouseleave`,entering);
function entering(ev){
    ev.currentTarget.style.backgroundColor = `grey`;
    console.log(`mouseenter ul`);
}
function leaving(ev){
    ev.currentTarget.style.backgroundColor=`grey`;
    console.log(`mouseleave ul`);
}*/