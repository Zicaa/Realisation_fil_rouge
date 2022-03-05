// Je cherche les différents éléments de la page
const url = 'https://data.laregion.fr/api/records/1.0/search/?dataset=reserves-naturelles-regionales-rnr&q=&facet=nom_dep';

let display = document.getElementById('display');
// Je récupère les données du fichier json
let jsonData; 
let zone = document.getElementById("zone");

// Je créé une fonction qui affiche toutes les réserves de la région
function showAllReserve() {
    fetch(url)
    .then(response => response.json())
    .then(data => 
    {
        for (let i = 0; i<data.records.length; i++)
        {
            let url2 = data.records[i].fields.url_fiche;
            zone.innerHTML += "<section><h3>Nom : " + data.records[i].fields.nom_site + "</h3>" +
            "<p>Surface : " + data.records[i].fields.surface + " km²" + "</p>" +
            "<p>Url de la fiche : " + "<a href =" + url2 + "target=_blank>" + data.records[i].fields.url_fiche + "</a></p>" +
            "<p>Code du département : " + data.records[i].fields.code_dep + "</p></section>"; 
        }
    });
}

const input = document.querySelector("#dpt");
input.addEventListener("input", showFilter);

// Je créé une fonction qui filtre par département
function showFilter()
{
    // Je vide automatiquement l'input
    zone.innerHTML = "";
    console.log("test");

    fetch(url)
    .then(response => response.json())
    .then(data => {
        for (let i = 0; i<data.records.length; i++) {
            // Je renvoi la valeur tapée dans mon input pour créer le filtre
            if (data.records[i].fields.code_dep === input.value) 
            {
                let url2 = data.records[i].fields.url_fiche;
                zone.innerHTML += "<section><h3>Nom : " + data.records[i].fields.nom_site + "</h3>" +
                "<p>Surface : " + data.records[i].fields.surface + " km²" + "</p>" +
                "<p>Url de la fiche : " + "<a href =" + url2 + "target=_blank>" + data.records[i].fields.url_fiche + "</a></p>" + "<p>Code du département : " + data.records[i].fields.code_dep + "</p></section>";             
            } 
        }
    });document.getElementById('input').value = showFilter;
}

