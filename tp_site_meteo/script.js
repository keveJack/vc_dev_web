$(document).ready(function() {
    // API Key for OpenWeatherMap
    const apiKey = 'd3d534dfbaa1f24dc173431ac1ea850c';

    // Function to fetch weather data
    function fetchWeather(city) {
        const apiUrl = `https://api.openweathermap.org/data/2.5/weather?q=${city}&appid=${apiKey}&units=metric`;
        
        $.ajax({
            url: apiUrl,
            method: 'GET',
            success: function(data) {
                displayWeather(data);
            },
            error: function(error) {
                console.log(error);
            }
        });
    }

    // Function to display weather information
    function displayWeather(data) {
        const weatherInfo = `
            <h2>${data.name}</h2>
            <p>Temperature: ${data.main.temp}°C</p>
            <p>Humidity: ${data.main.humidity}%</p>
            <p>Wind Speed: ${data.wind.speed} m/s</p>
        `;
        $('#weather-info').html(weatherInfo);

        // Display weather icon
        const iconUrl = `https://openweathermap.org/img/w/${data.weather[0].icon}.png`;
        const weatherIcon = `<img id="weather-icon" src="${iconUrl}" alt="Weather Icon">`;
        $('#image-container').html(weatherIcon);
    }

    // Event listener for search button
    $('#search-button').click(function() {
        const city = $('#city-input').val();
        fetchWeather(city);
    });

    // Event listener for locate button
    $('#locate-button').click(function() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                const lat = position.coords.latitude;
                const lon = position.coords.longitude;
                const apiUrl = `https://api.openweathermap.org/data/2.5/weather?lat=${lat}&lon=${lon}&appid=${apiKey}&units=metric`;
                
                $.ajax({
                    url: apiUrl,
                    method: 'GET',
                    success: function(data) {
                        displayWeather(data);
                    },
                    error: function(error) {
                        console.log(error);
                    }
                });
            });
        } else {
            alert('Geolocation is not supported by this browser.');
        }
    });
});
