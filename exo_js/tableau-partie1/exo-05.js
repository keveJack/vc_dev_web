
let moisFrancais = ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"];
let moisAnglais = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
let moisEspagnol = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];


for (let i = 0; i < 12; i++) {
    console.log(moisFrancais[i] + " | " + moisAnglais[i] + " | " + moisEspagnol[i]);
}


let body = document.body;
for (let i = 0; i < 12; i++) {
    let ligne = document.createElement("p");
    ligne.textContent = moisFrancais[i] + " | " + moisAnglais[i] + " | " + moisEspagnol[i];
    body.appendChild(ligne);
}
