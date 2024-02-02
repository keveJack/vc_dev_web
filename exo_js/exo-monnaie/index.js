document.addEventListener('DOMContentLoaded', function () {
    const numberButtons = document.querySelectorAll('.numberButton');
    const inputField = document.getElementById('inputField');
    const outputField = document.getElementById('outputField');
    const convertButton = document.getElementById('convertButton');

    function convertCurrency(amount, currencyFrom, currencyTo) {

        const exchangeRates = {
            EUR: { USD: 1.13, CZK: 25.73 },
            USD: { EUR: 0.88, CZK: 22.74 },
            CZK: { EUR: 0.039, USD: 0.044 }
        };

        if (!exchangeRates[currencyFrom] || !exchangeRates[currencyFrom][currencyTo]) {
            console.error('Conversion de devise non prise en charge');
            return null;
        }

        const rate = exchangeRates[currencyFrom][currencyTo];
        const convertedAmount = amount * rate;

        return convertedAmount;
    }

    numberButtons.forEach(button => {
        button.addEventListener('click', () => {
            inputField.value += button.value;
        });
    });


    convertButton.addEventListener('click', () => {

        const inputValue = parseFloat(inputField.value);
        const currencyFrom = document.querySelector('input[name="currencyFrom"]:checked').value;
        const currencyTo = document.querySelector('input[name="currencyTo"]:checked').value;
        const convertedValue = convertCurrency(inputValue, currencyFrom, currencyTo);

        if (convertedValue !== null) {
            outputField.value = `${inputValue} ${currencyFrom} équivaut à ${convertedValue.toFixed(2)} ${currencyTo}`;
        } else {
            outputField.value = "Erreur lors de la conversion";
        }
    });
});

async function recupData() {

    const apiKey = 'cur_live_Unavs8LMBMcPhZlnwZnBXbTzttP3B4mPDDruRRIA';
    const response = await fetch('https://api.currencyapi.com/v3/latest?apikey=' + apiKey,
    );
    console.log(await response.json());
}

recupData();