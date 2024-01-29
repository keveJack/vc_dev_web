function searchByYear() {
    let input, filter;
    input = document.getElementById('yearInput');
    filter = parseInt(input.value);
    searchResults = document.getElementById('search-results');
    searchResults.style.display = "block";


    let films = [
        { title: "Robot Monster", year: 1953 },
        { title: "Manos: The Hands of Fate", year: 1966 },
        { title: "Troll 2", year: 1990 },
        { title: "Birdemic: Shock and Terror", year: 2010 },
        { title: "Gymkata", year: 1985 },
        { title: "Santa Claus Conquers the Martians", year: 1964 },
        { title: "The Giant Claw", year: 1957 },
        { title: "Plan 9 from Outer Space", year: 1959 },
        { title: "Attack of the 50 Foot Woman", year: 1958 },
        { title: "Mega Shark vs. Giant Octopus", year: 2009 },
        { title: "Sharknado", year: 2013 },
        { title: "Cool as Ice", year: 1991 },
        { title: "Showgirls", year: 1995 },
        { title: "Batman & Robin", year: 1997 },
        { title: "Street Fighter", year: 1994 },
        { title: "Super Mario Bros.", year: 1993 },
        { title: "Battlefield Earth", year: 2000 },
        { title: "Congo", year: 1995 },
        { title: "Gigli", year: 2003 },
        { title: "Catwoman", year: 2004 },
        { title: "The Wicker Man", year: 2006 },
        { title: "Ghosts Can't Do It", year: 1989 },
        { title: "Death Bed: The Bed That Eats", year: 1977 },
        { title: "Killer Klowns from Outer Space", year: 1988 },
        { title: "Mac and Me", year: 1988 },
        { title: "The Adventures of Sharkboy and Lavagirl in 3-D", year: 2005 },
        { title: "The Garbage Pail Kids Movie", year: 1987 },
        { title: "Leonard Part 6", year: 1987 },
        { title: "Howard the Duck", year: 1986 },
        { title: "The Apple", year: 1980 },
        { title: "Zardoz", year: 1974 },
        { title: "The Room", year: 2003 },
        { title: "Rubber", year: 2010 },
        { title: "The Happening", year: 2008 },
        { title: "Attack of the Killer Tomatoes!", year: 1978 },
        { title: "Zombie Strippers!", year: 2008 },
        { title: "Surf Nazis Must Die", year: 1987 },
        { title: "Hobgoblins", year: 2005 }

    ];


    searchResults.innerHTML = "";


    let foundFilms = films.filter(function (film) {
        return film.year === filter;
    });


    if (foundFilms.length > 0) {
        let resultList = document.createElement("ul");
        foundFilms.forEach(function (film) {
            let listItem = document.createElement("li");
            listItem.textContent = film.title;
            resultList.appendChild(listItem);
        });
        searchResults.appendChild(resultList);
    } else {
        searchResults.textContent = "Aucun film trouvé pour cette année.";
    }
}