//demander a l'utilisateur
let nomPersonne = prompt("Entrez votre nom :");
let prenomPersonne = prompt("Entez votre prénom :")
let formateur = new Personne(nomPersonne, prenomPersonne);

let nomAnimal = prompt("Entrez le nom de l'animal :");
let especeAnimal = prompt("Entrez l'espèce de l'animal :");
let chatFormateur = new Animal(nomAnimal, especeAnimal);

let marqueVehicule = prompt("Entrez la marque du véhicule :");
let modeleVehicule = prompt("Entrez le modèle du véhicule :");
let nombrePlacesVehicule = prompt("Entrez le nombre de place du véhicule");
let vehiculeFormateur = new Vehicule(marqueVehicule, modeleVehicule, nombrePlacesVehicule);

let numeroRueMaison = prompt("Entrez le numéro de rue :");
let typeVoieMaison = prompt("Entrez le type de voie :");
let nomDeVoie = prompt("Entrez le nom de la voie :");
let codePostalMaison = prompt("Entrez le code postal :");
let villeMaison = prompt("Entrez la ville");
let domicileFormateur = new Maison(numeroRueMaison, typeVoieMaison, nomDeVoie, codePostalMaison, villeMaison);


//afficher dans la console
formateur.afficher();
chatFormateur.afficher();
vehiculeFormateur.afficher();
domicileFormateur.afficher();