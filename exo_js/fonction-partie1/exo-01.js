
function afficherLesNombres(n) {
    for (let i = 1; i <= n; i++) {
        console.log(i);
    }
}


let nombre = prompt("Entrez un nombre :");
let nombreInt = parseInt(nombre);


if (!isNaN(nombreInt) && nombreInt > 0) {
   
    afficherLesNombres(nombreInt);
} else {
    alert("Veuillez entrer un nombre entier positif!!");
}