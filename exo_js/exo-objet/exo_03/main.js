// Fonction pour demander à l'utilisateur le rayon du cercle
function demanderRayon() {
    let rayon = prompt("Veuillez entrer le rayon du cercle (un entier positif) :");
    rayon = parseInt(rayon);

    // Vérifier si l'entrée est un entier positif
    while (isNaN(rayon) || rayon <= 0) {
        rayon = prompt("Veuillez entrer un entier positif pour le rayon du cercle :");
        rayon = parseInt(rayon);
    }

    return rayon;
}

// Programme principal
function main() {
    let rayon = demanderRayon();
    let cercle = new Cercle(rayon);
    let surface = cercle.calculerSurface();
    let perimetre = cercle.calculerPerimetre();

    alert("Le cercle de rayon " + rayon + " cm a une surface de " + surface.toFixed(2) + " cm2. Son périmètre est de " + perimetre.toFixed(2) + " cm.");
}

// Appel du programme principal lorsque la page est chargée
window.addEventListener('load', main);
