
function estClasseCroissante(tableau) {
    for (let i = 1; i < tableau.length; i++) {

        if (tableau[i] < tableau[i - 1]) {
            return false;
        }
    }
    return true;
}


let tableauClasse = [1, 2, 3, 4, 5];
let tableauNonClasse = [3, 1, 4, 2, 5];

console.log("Le tableau [1, 2, 3, 4, 5] est classé par ordre croissant :", estClasseCroissante(tableauClasse));
console.log("Le tableau [3, 1, 4, 2, 5] est classé par ordre croissant :", estClasseCroissante(tableauNonClasse));
