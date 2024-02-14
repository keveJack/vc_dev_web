class Rectangle {
  constructor(pLongueur, pLargeur) {
    this.longueur = pLongueur;
    this.largeur = pLargeur;
  }

  calculerSurface() {
    return this.longueur * this.largeur;
  }

  calculerPerimetre() {
    return 2 * (this.longueur + this.largeur);
  }
}
