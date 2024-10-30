const minQueryLength = 3; // Minimum length for search query
let isProgrammaticChange = false; // Prevent triggering input on programmatic changes

// Debounce function to limit API calls
const debounce = (func, delay) => {
    let timeout;
    return (...args) => {
        clearTimeout(timeout);
        timeout = setTimeout(() => func.apply(this, args), delay);
    };
};

// Initialize autocomplete for **all existing flight blocks**
function setupAutocompleteForAllBlocks() {
    document.querySelectorAll('.flights-way-block').forEach(block => setupAutocompleteForBlock(block));
}

// Function to set up autocomplete within a single flight block
function setupAutocompleteForBlock(flightBlock) {
    const originInput = flightBlock.querySelector('.origin-input');
    const originList = flightBlock.querySelector('.origin-list');
    const destinationInput = flightBlock.querySelector('.destination-input');
    const destinationList = flightBlock.querySelector('.destination-list');

    if (originInput && destinationInput) {
        setupInputListener(originInput, originList);
        setupInputListener(destinationInput, destinationList);
    }
}

// Attach input event listener with debounce
function setupInputListener(input, resultList) {
    input.addEventListener('input', debounce(() => {
        if (isProgrammaticChange) {
            isProgrammaticChange = false; // Reset the flag
            return;
        }
        const query = input.value.trim();
        if (query.length >= minQueryLength) {
            search(query, resultList);
        } else {
            clearResults(resultList);
        }
    }, 300));
}

// Search function to fetch autocomplete results from API
function search(query, resultList) {
    resultList.innerHTML = '<li>Loading...</li>';
    resultList.classList.add('show');

    fetch(`?resource=flights&action=autocomplete&query=${encodeURIComponent(query)}`)
        .then(response => {
            if (!response.ok) throw new Error('Network response was not ok');
            return response.json();
        })
        .then(data => displayResults(data, resultList))
        .catch(error => {
            console.error('Error fetching results:', error);
            clearResults(resultList);
        });
}

// Display search results in the dropdown
function displayResults(results, resultList) {
    clearResults(resultList);

    if (results.length === 0) {
        resultList.innerHTML = '<li>No results found</li>';
        resultList.classList.add('show');
        return;
    }

    const cities = groupByCity(results);

    for (const city in cities) {
        const cityItem = document.createElement('li');
        cityItem.textContent = city;
        cityItem.classList.add('city-item');
        resultList.appendChild(cityItem);

        const airportsList = document.createElement('ul');
        airportsList.classList.add('airports-list');

        cities[city].forEach(airport => {
            const airportItem = document.createElement('li');
            airportItem.textContent = `${airport.name} (${airport.iata_code})`;
            airportItem.dataset.name = airport.name;
            airportItem.dataset.iata_code = airport.iata_code;
            airportItem.classList.add('airport-item');
            airportsList.appendChild(airportItem);
        });

        cityItem.appendChild(airportsList);
    }

    resultList.classList.add('show');
    attachAirportClickListeners(resultList);
}

// Group search results by city
function groupByCity(results) {
    return results.reduce((cities, result) => {
        const city = result.municipality || 'Unknown City';
        if (!cities[city]) cities[city] = [];
        cities[city].push({
            name: result.name,
            iata_code: result.iata_code
        });
        return cities;
    }, {});
}

// Add click listeners to airport items for selection
function attachAirportClickListeners(resultList) {
    resultList.querySelectorAll('.airport-item').forEach(item => {
        item.addEventListener('click', () => handleAirportSelection(item, resultList));
    });
}

// Handle airport selection and update input fields
function handleAirportSelection(airportItem, resultList) {
    const selectedName = airportItem.dataset.name;
    const selectedIataCode = airportItem.dataset.iata_code;

    // Set the flag to prevent triggering input event
    isProgrammaticChange = true;

    const inputField = resultList.closest('.flights-way-block')
        .querySelector(resultList.classList.contains('origin-list') ? '.origin-input' : '.destination-input');

    inputField.value = `${selectedName} (${selectedIataCode})`;
    clearResults(resultList);
}

// Clear dropdown results
function clearResults(resultList) {
    resultList.innerHTML = '';
    resultList.classList.remove('show');
}

// Detect new flight blocks and set up autocomplete
document.addEventListener('click', event => {
    const clickedBlock = event.target.closest('.flights-way-block');
    if (clickedBlock) {
        setupAutocompleteForBlock(clickedBlock); // Initialize autocomplete for the active block
    }
});
