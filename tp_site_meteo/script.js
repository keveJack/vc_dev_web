$(document).ready(function () {
  // Récupération des préférences stockées
  const savedSettings =
    JSON.parse(localStorage.getItem("weatherSettings")) || {};
  let units = savedSettings.units || "metric"; // Par défaut, unités métriques
  let lang = savedSettings.lang || "fr"; // Par défaut, langue française

  // API Key pour OpenWeatherMap
  const apiKey = "d3d534dfbaa1f24dc173431ac1ea850c";

  // Fonction pour récupérer les données météorologiques
  function fetchWeather(city) {
    const apiUrl = `https://api.openweathermap.org/data/2.5/weather?q=${city}&appid=${apiKey}&units=${units}&lang=${lang}`;

    $.ajax({
      url: apiUrl,
      method: "GET",
      success: function (data) {
        displayWeather(data);
        // Sauvegarde de la dernière localisation
        savedSettings.lastLocation = city;
        localStorage.setItem("weatherSettings", JSON.stringify(savedSettings));
      },
      error: function (error) {
        console.log(error);
      },
    });
  }

  // Fonction pour afficher les informations météo
  function displayWeather(data) {
    const translations = {
      en: {
        Temperature: "Temperature",
        Humidity: "Humidity",
        "Wind Speed": "Wind Speed",
      },
      fr: {
        Temperature: "Température",
        Humidity: "Humidité",
        "Wind Speed": "Vitesse du vent",
      },
    };

    const langTranslations = translations[lang];

    const weatherInfo = `
              <h2>${data.name}</h2>
              <p>${langTranslations["Temperature"]}: ${data.main.temp}°${
      units === "metric" ? "C" : "F"
    }</p>
              <p>${langTranslations["Humidity"]}: ${data.main.humidity}%</p>
              <p>${langTranslations["Wind Speed"]}: ${data.wind.speed} ${
      units === "metric" ? "m/s" : "mph"
    }</p>
          `;
    $("#weather-info").html(weatherInfo);

    // Affichage de l'icône météo
    const iconUrl = `https://openweathermap.org/img/w/${data.weather[0].icon}.png`;
    const weatherIcon = `<img id="weather-icon" src="${iconUrl}" alt="Weather Icon">`;
    $("#image-container").html(weatherIcon);
  }

  // Fonction pour mettre à jour les données météo avec les préférences actuelles
  function updateWeatherWithPreferences() {
    const lastLocation = savedSettings.lastLocation;
    if (lastLocation) {
      fetchWeather(lastLocation);
    }
  }

  // Event listener pour le bouton de recherche
  $("#search-button").click(function () {
    const city = $("#city-input").val();
    fetchWeather(city);
  });

  // Event listener pour le bouton de localisation
  $("#locate-button").click(function () {
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(function (position) {
        const lat = position.coords.latitude;
        const lon = position.coords.longitude;
        const apiUrl = `https://api.openweathermap.org/data/2.5/weather?lat=${lat}&lon=${lon}&appid=${apiKey}&units=${units}&lang=${lang}`;

        $.ajax({
          url: apiUrl,
          method: "GET",
          success: function (data) {
            displayWeather(data);
            // Sauvegarde de la dernière localisation
            savedSettings.lastLocation = data.name;
            localStorage.setItem(
              "weatherSettings",
              JSON.stringify(savedSettings)
            );
          },
          error: function (error) {
            console.log(error);
          },
        });
      });
    } else {
      alert("La géolocalisation n'est pas prise en charge par ce navigateur.");
    }
  });

  // Event listener pour changer les unités
  $("#unit-selector").change(function () {
    units = $(this).val();
    savedSettings.units = units;
    localStorage.setItem("weatherSettings", JSON.stringify(savedSettings));
    updateWeatherWithPreferences();
  });

  // Event listener pour changer la langue
  $("#lang-selector").change(function () {
    lang = $(this).val();
    savedSettings.lang = lang;
    localStorage.setItem("weatherSettings", JSON.stringify(savedSettings));
    updateWeatherWithPreferences();
  });

  // Chargement des préférences par défaut
  $("#unit-selector").val(units);
  $("#lang-selector").val(lang);

  // Si la dernière localisation est sauvegardée, lancer la recherche au chargement de la page
  updateWeatherWithPreferences();
});
