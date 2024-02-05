document.addEventListener('DOMContentLoaded', function () {
    let randomButton = document.querySelector('.Random');
    randomButton.addEventListener('click', function () {
        let red = Math.floor(Math.random() * 255);
        let green = Math.floor(Math.random() * 255);
        let blue = Math.floor(Math.random() * 255);
        let randomColor = 'rgb(' + red + ',' + green + ',' + blue + ')';
        document.body.style.backgroundColor = randomColor;
    });

    let couleurButton = document.querySelector('.Couleur');
    couleurButton.addEventListener('click', function () {
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
    });

    let ajouterH1Button = document.querySelector('.AjouterH1');
    ajouterH1Button.addEventListener('click', function () {
        let titre = prompt("Entrez le texte du titre (H1) :");
        if (titre !== null && titre !== "") {
            let h1Element = document.createElement('h1');
            h1Element.textContent = titre;
            document.body.appendChild(h1Element);
        }
    });

    let ajouterPButton = document.querySelector('.AjouterP');

    ajouterPButton.addEventListener('click', function () {
        let texte = prompt("Entrez le texte du paragraphe (P) :");
        if (texte !== null && texte !== "") {
            let pElement = document.createElement('p');
            pElement.textContent = texte;

            let masquerRevelerButton = document.createElement('button');
            masquerRevelerButton.textContent = "Masquer / Révéler";
            masquerRevelerButton.classList.add('MasquerReveler');

            let deleteButton = document.createElement('button');
            deleteButton.textContent = "x";
            deleteButton.classList.add('DeleteButton');

            let paragraphContainer = document.createElement('div');
            paragraphContainer.appendChild(pElement);
            paragraphContainer.appendChild(masquerRevelerButton);
            paragraphContainer.appendChild(deleteButton);

            document.body.appendChild(paragraphContainer);

            masquerRevelerButton.addEventListener('click', function () {
                if (pElement.style.display === 'block' || pElement.style.display === '') {
                    pElement.style.display = 'none';
                } else {
                    pElement.style.display = 'block';
                }
            });

            deleteButton.addEventListener('click', function () {
                paragraphContainer.remove();
            });
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

