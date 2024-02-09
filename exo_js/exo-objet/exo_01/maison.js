class Maison {
    constructor(pNumeroRue, pTypeVoie, pNomVoie, pCodePostal, pVille) {
        this.numeroRue = pNumeroRue;
        this.typeVoie = pTypeVoie;
        this.nomVoie = pNomVoie;
        this.codePostal = pCodePostal;
        this.ville = pVille;
    }

    afficher() {
        console.log(`Le logement se situe ${this.numeroRue} ${this.typeVoie} ${this.nomVoie} - ${this.codePostal} ${this.ville}`);
    }
}
