//https://magasin.mboudrea.tim-cstj.ca/api/produit/alea/10
function affichageDonnees(donnees)
{
    data = JSON.parse(donnees);
    console.log(data);
    document.querySelector("#demo").innerHTML = JSON.stringify(data);
    const ul = document.querySelector('ul')
    data.produits.forEach(produit => {
        const li = document.createElement('li')
        li.textContent = produit.titre;
        ul.appendChild(li)
        
    });
}

function chargementDonnees() {
    // création de la requête HTTPAJAX
    const xhttp = new XMLHttpRequest();
    xhttp.onload =function(){affichageDonnees(this.responseText);}
    xhttp.open("GET", "https://magasin.mboudrea.tim-cstj.ca/api/produit/alea/10", true);
    xhttp.send();
  }
  chargementDonnees();
