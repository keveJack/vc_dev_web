
function afficherNombresPairs(n) {
    let nombresPairs = "";

    for (let i = 2; i <= n; i += 2) {
        nombresPairs += i;

        if (i < n - 1) {
            nombresPairs += "-";
        }
    }

    console.log(nombresPairs);
}

let nombresPairs = prompt("Entrez un nombre :");
let nombreInt = parseInt(nombresPairs);

afficherNombresPairs(nombreInt);