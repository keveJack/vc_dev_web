
function sommeDesEntiers(tableau) {
    let somme = 0;
    for (let i = 0; i < tableau.length; i++) {
        somme += tableau[i];
    }
    return somme;
}


let tableauTest = [1, 2, 3, 4, 5];
let resultat = sommeDesEntiers(tableauTest);


console.log("Le tableau est :", tableauTest);
console.log("La somme des entiers dans le tableau est :", resultat);


