document.addEventListener('DOMContentLoaded', function () {
    const zombiesBtn = document.getElementById('zombiesBtn');
    const startrekBtn = document.getElementById('startrekBtn');
    const sdaBtn = document.getElementById('sdaBtn');
    const searchInput = document.getElementById('searchInput');
    const searchBtn = document.getElementById('searchBtn');
    const quoteText = document.getElementById('Text');
    const quoteAuthor = document.getElementById('Author');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');


    console.log(searchInput);
    console.log(searchBtn);

    let currentIndex = 0;
    let currentQuotes = [];

    zombiesBtn.addEventListener('click', () => loadQuotes('zombies.json'));
    startrekBtn.addEventListener('click', () => loadQuotes('startrek.json'));
    sdaBtn.addEventListener('click', () => loadQuotes('sda.json'));
    window.addEventListener('load',() => loadQuotes('sda.json'));

    searchBtn.addEventListener('click', searchQuotes);
    prevBtn.addEventListener('click', showPreviousQuote);
    nextBtn.addEventListener('click', showNextQuote);


    function loadQuotes(jsonFile, category) {
        fetch(jsonFile)
            .then(response => response.json())
            .then(data => {
                console.log(data);
                currentQuotes = data;
                currentIndex = 0;
                displayQuote(Math.floor(Math.random()*data.length));
                document.getElementById('Container').className = `text-center ${category}`;
            })
            .catch(error => console.error('Error loading quotes:', error));
    }


    function showNextQuote() {
        currentIndex = (currentIndex + 1) % currentQuotes.length;
        displayQuote(currentIndex);
    }

    function showPreviousQuote() {
        currentIndex = (currentIndex - 1 + currentQuotes.length) % currentQuotes.length;
        displayQuote(currentIndex);
    }

    function displayQuote(pCurrentIndex) {
        const quote = currentQuotes[pCurrentIndex];
        console.log(quote);
        quoteText.textContent = quote.text;
        quoteAuthor.textContent = `- ${quote.author}`;
    }

    function searchQuotes(event) {
        event.preventDefault();
        const searchTerm = searchInput.value.toLowerCase();
        console.log(currentQuotes);
        const filteredQuotes = currentQuotes.filter(quote => {
            return quote.text.toLowerCase().includes(searchTerm) || quote.author.toLowerCase().includes(searchTerm);
        });
        currentQuotes = filteredQuotes;
        currentIndex = 0;
        displayQuote(currentIndex);
    }

    // Facebook and Twitter sharing functions
    // const facebookBtn = document.getElementById('facebookBtn');
    // const twitterBtn = document.getElementById('twitterBtn');

    // facebookBtn.addEventListener('click', shareOnFacebook);
    // twitterBtn.addEventListener('click', shareOnTwitter);

    // function shareOnFacebook() {
    //     // Logic to share the quote on Facebook
    // }

    // function shareOnTwitter() {
    //     // Logic to share the quote on Twitter
    // }
});
