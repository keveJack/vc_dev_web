
function afficherLesNombresRebour(n) {
    for (let i = n; i >= 1; i--) {
        console.log(i);
    }
}


let nombre = prompt("Entrez un nombre :");
let nombreInt = parseInt(nombre);


if (!isNaN(nombreInt) && nombreInt > 0) {

    afficherLesNombresRebour(nombreInt);
} else {
    alert("Veuillez entrer un nombre entier positif!!");
}