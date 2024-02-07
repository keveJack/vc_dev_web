function masquerAfficher(pElement) {
    if (pElement.style.display === 'block' || pElement.style.display === '') {
        pElement.style.display = 'none';
    } else {
        pElement.style.display = 'block';
    }
}


function changerCouleurAleatoire() {
    let red = Math.floor(Math.random() * 255);
    let green = Math.floor(Math.random() * 255);
    let blue = Math.floor(Math.random() * 255);
    let randomColor = 'rgb(' + red + ',' + green + ',' + blue + ')';
    document.body.style.backgroundColor = randomColor;
}

function changementCouleurNoirEtBlanc() {
    let bodyStyle = getComputedStyle(document.body);
    let currentBgColor = bodyStyle.backgroundColor;
    let currentTextColor = bodyStyle.color;

    if (currentBgColor === 'rgb(255, 255, 255)' && currentTextColor === 'rgb(0, 0, 0)') {
        document.body.style.backgroundColor = 'black';
        document.body.style.color = 'white';
    } else {
        document.body.style.backgroundColor = 'white';
        document.body.style.color = 'black';
    }
}

function crerConteneurParagraphe(pElement, masquerRevelerButton, deleteButton) {
    let paragraphContainer = document.createElement('div');
    paragraphContainer.appendChild(pElement);
    paragraphContainer.appendChild(masquerRevelerButton);
    paragraphContainer.appendChild(deleteButton);
    return paragraphContainer;
}

function creerParagraphe(texte) {
    let pElement = document.createElement('p');
    pElement.textContent = texte;
    return pElement;
}

function creerBoutonSupprimer() {
    let deleteButton = document.createElement('button');
    deleteButton.textContent = "x";
    deleteButton.classList.add('DeleteButton');
    return deleteButton;
}

function creerBoutonMasquerReveler() {
    let masquerRevelerButton = document.createElement('button');
    masquerRevelerButton.textContent = "Masquer / Révéler";
    masquerRevelerButton.classList.add('MasquerReveler');
    return masquerRevelerButton;
}
function creerUnTitre(pTitre) {
   
    if (pTitre !== null && pTitre !== "") {
        let h1Element = document.createElement('h1');
        h1Element.textContent = pTitre;
        document.body.appendChild(h1Element);
    }
}
function creerParagrapheEtBoutons(texte) {
    let nouveauParagraphe = creerParagraphe(texte);
    let masquerRevelerButton = creerBoutonMasquerReveler();
    let deleteButton = creerBoutonSupprimer();
    let paragraphContainer = crerConteneurParagraphe(nouveauParagraphe, masquerRevelerButton, deleteButton);
    document.body.appendChild(paragraphContainer);
    masquerRevelerButton.addEventListener('click', function () { masquerAfficher(nouveauParagraphe); });
    deleteButton.addEventListener('click', function () { paragraphContainer.remove(); });
}