function afficherPuissancesDeDeux(nombre) {
    let resultat = "Puissances de 2 jusqu'à 2^" + nombre + " :<br>";
    let paragraphe = document.querySelector("p");
    let i = 0
    while (i<nombre){
       
        i++; 
        resultat += "2^" + i + " = " + Math.pow(2, i) + "<br>";
    }

    paragraphe.innerHTML = resultat;
}


afficherPuissancesDeDeux(16);
