
let films = [
    { titre: "Film 1", annee: 2010, note: 8 },
    { titre: "Film 2", annee: 2015, note: 7 },
    { titre: "Film 3", annee: 2018, note: 9 },
    { titre: "Film 4", annee: 2020, note: 6 },
    { titre: "Film 5", annee: 2012, note: 8 }
];


function calculerMoyenneNotes(films) {
    let sommeNotes = 0;
    for (let film of films) {
        sommeNotes += film.note;
    }
    return sommeNotes / films.length;
}


function meilleurFilm(films) {
    let meilleurNote = -1;
    let meilleurTitre = "";

    for (let film of films) {
        if (film.note > meilleurNote) {
            meilleurNote = film.note;
            meilleurTitre = film.titre;
        }
    }

    return meilleurTitre;
}


let moyenne = calculerMoyenneNotes(films);
console.log("La moyenne des notes des films est : " + moyenne);


let meilleur = meilleurFilm(films);
console.log("Le film avec la meilleure note est : " + meilleur);
