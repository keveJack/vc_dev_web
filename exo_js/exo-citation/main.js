document.addEventListener('DOMContentLoaded', function() {
    const zombiesBtn = document.getElementById('zombiesBtn');
    const startrekBtn = document.getElementById('startrekBtn');
    const sdaBtn = document.getElementById('sdaBtn');
    const quoteText = document.getElementById('Text');
    const quoteAuthor = document.getElementById('Author');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');

    let currentIndex = 0;
    let currentQuotes = [];

    zombiesBtn.addEventListener('click', () => loadQuotes('zombies.json'));
    startrekBtn.addEventListener('click', () => loadQuotes('startrek.json'));
    sdaBtn.addEventListener('click', () => loadQuotes('sda.json'));

    prevBtn.addEventListener('click', showPreviousQuote);
    nextBtn.addEventListener('click', showNextQuote);

    function loadQuotes(jsonFile) {
        fetch(jsonFile)
            .then(response => response.json())
            .then(data => {
                currentQuotes = data;
                currentIndex = 0;
                displayQuote();
            })
            .catch(error => console.error('Error loading quotes:', error));
    }

    function showNextQuote() {
        currentIndex = (currentIndex + 1) % currentQuotes.length;
        displayQuote();
    }

    function showPreviousQuote() {
        currentIndex = (currentIndex - 1 + currentQuotes.length) % currentQuotes.length;
        displayQuote();
    }

    function displayQuote() {
        const quote = currentQuotes[currentIndex];
        quoteText.textContent = quote.text;
        quoteAuthor.textContent = `- ${quote.author}`;
    }
});
