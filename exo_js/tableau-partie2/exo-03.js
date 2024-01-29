
const filmsNanards = [
    { titre: "filmsNanards1", année: 1959 },
    { titre: "filmsNanards2", année: 2003 },
    { titre: "filmsNanards3", année: 2010 },
    { titre: "filmsNanards4", année: 1959 },
    { titre: "filmsNanards5", année: 2003 },
    { titre: "filmsNanards6", année: 2010 }
];


function filmsParAnnee(anneeRecherchee) {
   
    const filmsFiltres = filmsNanards.filter(film => film.année === anneeRecherchee);
    return filmsFiltres;
}


console.log("Films de 1959 :", filmsParAnnee(1959));
console.log("Films de 2003 :", filmsParAnnee(2003));
console.log("Films de 2010 :", filmsParAnnee(2010));
