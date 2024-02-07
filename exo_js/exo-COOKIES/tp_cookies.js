document.addEventListener('DOMContentLoaded', function () {
    const toggleButton = document.getElementById('toggleButton');
    const body = document.body;

    // Fonction pour définir le cookie avec une durée d'expiration
    function setCookie(name, value, days) {
        const date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        const expires = "expires=" + date.toUTCString();
        document.cookie = name + "=" + value + ";" + expires + ";path=/";
    }

    // Fonction pour récupérer la valeur d'un cookie
    function getCookie(name) {
        const cname = name + "=";
        const decodedCookie = decodeURIComponent(document.cookie);
        const cookieArray = decodedCookie.split(';');
        for (let i = 0; i < cookieArray.length; i++) {
            let cookie = cookieArray[i];
            while (cookie.charAt(0) === ' ') {
                cookie = cookie.substring(1);
            }
            if (cookie.indexOf(cname) === 0) {
                return cookie.substring(cname.length, cookie.length);
            }
        }
        return "";
    }

    // Vérifie si un cookie darkMode existe et applique le mode correspondant
    const darkModeCookie = getCookie('darkMode');
    if (darkModeCookie === 'true') {
        body.style.backgroundColor = 'black';
        body.style.color = 'white';
        toggleButton.textContent = 'Light Mode';
    }

    toggleButton.addEventListener('click', function () {
        // Vérifie si le fond est blanc 
        if (body.style.backgroundColor === 'white' || body.style.backgroundColor === '') {
            // Change les couleurs pour le mode sombre
            body.style.backgroundColor = 'black';
            body.style.color = 'white';
            toggleButton.textContent = 'Light Mode';
            setCookie('darkMode', 'true', 3); // Définit le cookie avec une durée d'expiration de 3 jours
        } else {
            // Change les couleurs pour le mode clair
            body.style.backgroundColor = 'white';
            body.style.color = 'black';
            toggleButton.textContent = 'Dark Mode';
            setCookie('darkMode', 'false', 3); // Définit le cookie avec une durée d'expiration de 3 jours
        }
    });
});
