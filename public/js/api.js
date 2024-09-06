const apiUrl = 'http://yourapi.com'; // Replace with your API URL

async function searchFlights() {
    const from = document.getElementById('from').value;
    const to = document.getElementById('to').value;
    const date = document.getElementById('date').value;

    const response = await fetch(`${apiUrl}/search?from=${from}&to=${to}&date=${date}`);
    const data = await response.json();

    displaySearchResults(data);
}

async function autocomplete() {
    const query = document.getElementById('autocomplete-input').value;

    const response = await fetch(`${apiUrl}/autocomplete?query=${query}`);
    const data = await response.json();

    displayAutocompleteResults(data);
}

function displaySearchResults(results) {
    const resultsDiv = document.getElementById('results');
    resultsDiv.innerHTML = '';

    results.forEach(result => {
        const resultItem = document.createElement('div');
        resultItem.textContent = `${result.flight} - ${result.price}`;
        resultsDiv.appendChild(resultItem);
    });
}

function displayAutocompleteResults(results) {
    const resultsList = document.getElementById('autocomplete-results');
    resultsList.innerHTML = '';

    results.forEach(result => {
        const resultItem = document.createElement('li');
        resultItem.textContent = result;
        resultsList.appendChild(resultItem);
    });
}
