// AU CHARGEMENT PAGE
document.addEventListener('DOMContentLoaded', function () {
    let randomButton = document.querySelector('.Random');
    randomButton.addEventListener('click',changerCouleurAleatoire);

    let couleurButton = document.querySelector('.Couleur');
    couleurButton.addEventListener('click',changementCouleurNoirEtBlanc);

    let ajouterH1Button = document.querySelector('.AjouterH1');
    ajouterH1Button.addEventListener('click', function () {
        let titre = prompt("Entrez le texte du titre (H1) :");
        creerUnTitre(titre);
    });

    let ajouterPButton = document.querySelector('.AjouterP');

    ajouterPButton.addEventListener('click', function () {
        let texte = prompt("Entrez le texte du paragraphe (P) :");
        if (texte !== null && texte !== "") {
            creerParagrapheEtBoutons(texte);
        }
    });


    let masquerTousButton = document.createElement('button');
    masquerTousButton.textContent = "Masquer / Révéler Tous";
    masquerTousButton.classList.add('MasquerTous');
    document.querySelector('nav').appendChild(masquerTousButton);

    masquerTousButton.addEventListener('click', function () {
        let paragraphs = document.querySelectorAll('p');
        let firstParagraphDisplay = paragraphs[0].style.display;
        let shouldShowAll = firstParagraphDisplay === 'none';

        paragraphs.forEach(function (paragraph) {
            paragraph.style.display = shouldShowAll ? 'block' : 'none';
        });
    });
});




