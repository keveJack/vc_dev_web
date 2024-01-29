
function moyenneDesEntiers(tableau) {
    if (tableau.length === 0) {
        return 0;
    }

    let somme = 0;
    for (let i = 0; i < tableau.length; i++) {
        somme += tableau[i];
    }

    return somme / tableau.length;
}


let tableauTest = [10, 20, 30, 40, 50];
let resultat = moyenneDesEntiers(tableauTest);


console.log("Le tableau est :", tableauTest);
console.log("La moyenne des entiers dans le tableau est :", resultat);
