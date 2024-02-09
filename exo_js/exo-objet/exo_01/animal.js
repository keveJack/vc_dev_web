class Animal {
    constructor(pNom, pEspece) {
        this.nom = pNom;
        this.espece = pEspece;
    }

    afficher() {
        console.log(`L'animal s'appelle ${this.nom} et est de l'espèce ${this.espece}.`);
    }
}
