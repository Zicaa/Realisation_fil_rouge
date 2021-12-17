// je crée une variable dans laquelle je stocke la base de l'url de l'API
const url="https://www.prevision-meteo.ch/services/json/";

function displayData(data){
    let div = document.getElementById("display");
    div.innerHTML="";

    const newH2 = document.createElement("h2");
    const newH3 = document.createElement("h3");
    const newH4 = document.createElement("h4");
    const newImg = document.createElement("img");
    const newP = document.createElement("p");

    newH2.innerHTML = `Météo pour ${data.city_info.name}, ${data.city_info.country}`;
    div.appendChild(newH2);

    newH3.innerHTML = `${data.current_condition.date}, ${data.current_condition.hour}`;
    div.appendChild(newH3);

    newH4.innerHTML = "conditions actuelles :";
    div.appendChild(newH4);

    newImg.setAttribute("src",data.current_condition.icon_big);
    div.appendChild(newImg);

    newP.innerHTML = 
    `Température ${data.current_condition.tmp}°C.
    </br>
    Vent: ${data.current_condition.wnd_spd} Km/h, ${data.current_condition.wnd_dir}
    <br>
    ${data.current_condition.condition}.`;
    div.appendChild(newP);

    let days = [data.fcst_day_1,data.fcst_day_2,data.fcst_day_3,data.fcst_day_4];
    for (let day in days){
        const newH5 = document.createElement("h5");
        const newImg2 = document.createElement("img");
        const newP2 = document.createElement("p");
        console.log(days[day]);

        newH5.innerHTML = `${days[day].day_long},${days[day].date}`;
        div.appendChild(newH5);
        newImg2.setAttribute("src",days[day].icon_big);
        div.appendChild(newImg2);

        newP2.innerHTML = 
        `Température ${days[day].condition}
        </br>
        Temperature max et min: ${days[day].tmax}°C., ${days[day].tmin}°C.`;
        div.appendChild(newP2);

        for (let i = 0; i<=23; i ++){
            let hour = days[day].hourly_data[`${i}H00`];

            const newSection = document.createElement("section");
            const newImg3 = document.createElement("img");
            const newP = document.createElement("p");

            div.appendChild(newSection);
            
            newImg.setAttribute("src", hour.ICON);
            newImg.style.display = "inline-block";
            newSection.appendChild(newImg);

            newP.innerHTML = `${i}H00: ${hour.CONDITION}`;
            newP.style.display = "inline-block";
            newSection.appendChild(newP);
        }
    } div.appendChild(icon);
     
}

// je fais une fonction de requête de l'API
function requestApi(event){
    event.preventDefault();

    //je récupère l'input de la ville
    const city = document.querySelector("form input[name='city']");
    console.log(city.value); // à commenter plus tard

    // je fais l'envoi de la requête en concaténant la base url avec la valeur de city
    fetch(`${url}${city.value}`)
        // quand j'obtiens une réponse je mets le body en json
        .then(response => response.json())
        // puis je traite les donnes reçues
        .then(data => {
            console.log(`success: `, data);
            // todo plus tard
            displayData(data);
        })
        // en cas d'erreur je lève une exception et j'affiche l'erreur
        .catch((error) => {
            console.error(`Error: `, error);
        });
}
    const inputs = document.querySelectorAll("input");

    // j'ajoute un eventlistener sur le bouton submit
    inputs[1].addEventListener("click", function(event){
        requestApi(event);
    })

    function afficherCurrentCondition(data){
        console.log(data.current_condition.tmp);
    }



    