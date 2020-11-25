/*let promise = fetch("https://test-es.edamam.com/search", {
    method: "GET", //ou POST, PUT, DELETE, etc.
    headers: {
      "Content-Type": "text/plain;charset=UTF-8" //pour un corps de type chaine
    },
    body: undefined, //ou string, FormData, Blob, BufferSource, ou URLSearchParams
    referrer: "about:client", //ou "" (pas de réferanr) ou une url de l'origine
    referrerPolicy: "no-referrer-when-downgrade", //ou no-referrer, origin, same-origin...
    mode: "cors", //ou same-origin, no-cors
    credentials: "same-origin", //ou omit, include
    cache: "default", //ou no-store, reload, no-cache, force-cache, ou only-if-cached
    redirect: "follow", //ou manual ou error
    integrity: "", //ou un hash comme "sha256-abcdef1234567890"
    keepalive: false, //ou true pour que la requête survive à la page
    signal: undefined //ou AbortController pour annuler la requête
})
.then(response => response.json())
.then(response => alert(JSON.stringify(response)))
.catch(error => alert("Erreur : " + error));*/



/*
  fetch(`https://api.edamam.com/search?q=chicken&app_id=${APP_ID}&app_key=${APP_KEY}&from=0&to=3&calories=591-722&health=alcohol-free`)
  .then(response => response.json())
  .then(response => console.log(response))
  .catch(error => alert("Erreur : " + error));
*/




let searchButton = document.querySelector('#search');

const APP_ID = "dbc48064";
const APP_KEY = "a503ae20a04c9c9c7ebb6804605cec25" ;


searchButton.addEventListener('click', ()=> {

  let recipeSearch = document.querySelector('#recipeName').value;

  fetch(`https://api.edamam.com/search?q=${recipeSearch}&app_id=${APP_ID}&app_key=${APP_KEY}`)
  .then(response => response.json())
  .then(response => {
    for(let hit of response.hits) {
      document.querySelector('#searchResult').innerHTML+=   
        `<div class="card" style="width: 18rem;">
          <img src="${hit.recipe.image}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">${hit.recipe.label}</h5>
                  <p class="card-text">${hit.recipe.source}</p>
                <a href="${hit.recipe.url}" class="btn btn-primary">Ver la receta</a>
            </div>
        </div>`
      console.log(hit);
    }
  
    }/*console.log(response.hits)*/)
  .catch(error => alert("Erreur : " + error));
 
  console.log("Button pressed");
  
});

/*function sendApiRequest() {


  let response = await fetch('https://test-es.edamam.com/search?app_id=${APP_ID}&app_key={APP_KEY}&q=pizza');
  console.log(response);
}


function useApiData(data) {


}*/




