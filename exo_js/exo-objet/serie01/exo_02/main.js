window.addEventListener("DOMContentLoaded", () => {
  // Demander à l'utilisateur la longueur et la largeur du rectangle
  const longueur = parseFloat(prompt("Entrez la longueur du rectangle :"));
  const largeur = parseFloat(prompt("Entrez la largeur du rectangle :"));

  // Créer une instance de Rectangle
  const rectangle = new Rectangle(longueur, largeur);

  // Calculer la surface et le périmètre
  const surface = rectangle.calculerSurface();
  const perimetre = rectangle.calculerPerimetre();

  // Afficher les résultats avec une alerte
  alert(
    `La surface du rectangle est : ${surface}\nLe périmètre du rectangle est : ${perimetre}`
  );
});
