class Personne {
    constructor(pNom, pPrenom) {
        this.nom = pNom;
        this.prenom = pPrenom;
    }

    afficher() {
        console.log(`La personne s'appelle ${this.prenom} ${this.nom}.`);
    }
}
