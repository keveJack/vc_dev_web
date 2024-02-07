let fenetre = null; // La variable pour stocker la fenêtre ouverte

// Fonction pour ouvrir une nouvelle fenêtre
function ouvrirFenetre() {
  fenetre = window.open('', '_blank', 'width=500,height=500');
}

// Fonction pour redimensionner la fenêtre par un certain nombre de pixels
function redimensionnerPar() {
  if (fenetre !== null) {
    fenetre.resizeBy(100, 100); 
  }
}

// Fonction pour redimensionner la fenêtre à une taille spécifique
function redimensionnerA() {
  if (fenetre !== null) {
    fenetre.resizeTo(600, 600); 
  }
}

// Fonction pour fermer la fenêtre
function fermerFenetre() {
  if (fenetre !== null) {
    fenetre.close();
    fenetre = null; 
  }
}

// Fonction pour afficher les informations sur la fenêtre
function afficherInformationsFenetre() {
  // Récupérer les informations sur la fenêtre à partir de l'objet screen
  let hauteur = screen.height;
  let largeur = screen.width;
  let couleurProfondeur = screen.colorDepth;
  let pixelProfondeur = screen.pixelDepth;

  // Construire le texte à afficher
  let infoText = "Hauteur de la fenêtre: " + hauteur + " pixels<br>" +
    "Largeur de la fenêtre: " + largeur + " pixels<br>" +
    "Profondeur de couleur: " + couleurProfondeur + " bits par pixel<br>" +
    "Profondeur de pixel: " + pixelProfondeur + " bits par pixel";

  // Afficher les informations dans le paragraphe spécifié
  document.getElementById("windowInfo").innerHTML = infoText;
}

// Fonction pour demander la géolocalisation
function demanderGeolocalisation() {
  navigator.geolocation.getCurrentPosition(
    function(position) {
      // Si l'utilisateur accepte, afficher ses coordonnées
      afficherCoordonnees(position.coords.latitude, position.coords.longitude);
      afficherReponse("ok");
    },
    function(error) {
      // Si l'utilisateur refuse ou s'il y a une erreur, afficher "annuler"
      afficherReponse("annuler");
    }
  );
}

// Fonction pour afficher la réponse dans le paragraphe
function afficherReponse(reponse) {
  document.getElementById("reponse").innerHTML = "Réponse : " + reponse;
}

// Fonction pour afficher les coordonnées dans le paragraphe
function afficherCoordonnees(latitude, longitude) {
  document.getElementById("coordinates").innerHTML = "Latitude : " + latitude + "<br>Longitude: " + longitude;
}

// Ajouter des écouteurs d'événements pour les boutons
document.getElementById('openBtn').addEventListener('click', ouvrirFenetre);
document.getElementById('resizeByBtn').addEventListener('click', redimensionnerPar);
document.getElementById('resizeToBtn').addEventListener('click', redimensionnerA);
document.getElementById('closeBtn').addEventListener('click', fermerFenetre);
document.getElementById('geolocaliserBtn').addEventListener('click', demanderGeolocalisation);

// Appeler la fonction pour afficher les informations dès que la page est chargée
window.onload = afficherInformationsFenetre;
