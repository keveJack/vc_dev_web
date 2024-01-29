function trierParTitre(films) {
    films.sort(function(a, b) {
        let titreA = a.titre.toLowerCase();
        let titreB = b.titre.toLowerCase();
        if (titreA < titreB) return -1;
        if (titreA > titreB) return 1;
        return 0;
    });
    return films;
}
function trierParAnnee(films) {
    films.sort(function(a, b) {
        return b.annee - a.annee;
    });
    return films;
}

let films = [
    { titre: "Le Parrain", annee: 1972 },
    { titre: "Forrest Gump", annee: 1994 },
    { titre: "Deception", annee: 2010 },
    { titre: "Interstellar", annee: 2014 },
    { titre: "Pulp Fiction", annee: 1994 },
    { titre: "The Dark Knight", annee: 2008 }
    
];


let filmsTriesParTitre = trierParTitre(films);
console.log("Films triés par titre:");
filmsTriesParTitre.forEach(film => {
    console.log(film.titre+' '+film.annee);
    
});


let filmsTriesParAnnee = trierParAnnee(films);
console.log("Films triés par année de sortie:");
filmsTriesParAnnee.forEach(film => {
    console.log(film.titre+' '+film.annee);
    
});
