class Vehicule {
  constructor(pMarque, pModele, pNombrePlaces) {
    this.marque = pMarque;
    this.modele = pModele;
    this.nombrePlaces = pNombrePlaces;
  }

  afficher() {
    console.log(
      `Le véhicule est de la marque ${this.marque} et du modèle ${this.modele}. Il peut transporter ${this.nombrePlaces} personne(s).`
    );
  }
}
