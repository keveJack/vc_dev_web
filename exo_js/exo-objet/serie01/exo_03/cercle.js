class Cercle {
  constructor(pRayon) {
    this.rayon = pRayon;
  }

  calculerSurface() {
    return Math.PI * Math.pow(this.rayon, 2);
  }

  calculerPerimetre() {
    return 2 * Math.PI * this.rayon;
  }
}

// Export de la classe Cercle pour pouvoir l'utiliser dans d'autres fichiers
window.Cercle = Cercle;
