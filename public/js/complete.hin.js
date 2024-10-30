var minQueryLength = 3; // Minimum length for search query

var searchInput = document.getElementById('origin');
var originList = document.getElementById('origin-list');
var destinationInput = document.getElementById('destination');
var destinationList = document.getElementById('destination-list');

var isProgrammaticChange = false; // Flag to prevent triggering input on programmatic changes

// Debounce function to limit API calls
function debounce(func, delay) {
    let timeout;
    return function (...args) {
        clearTimeout(timeout);
        timeout = setTimeout(() => func.apply(this, args), delay);
    };
}

// Event listeners for input fields
searchInput.addEventListener('input', debounce(function () {
    if (isProgrammaticChange) {
        isProgrammaticChange = false; // Reset the flag
        return; // Prevent further execution
    }
    var query = searchInput.value.trim();
    if (query.length >= minQueryLength) {
        search(query, originList);
    } else {
        clearResults(originList);
    }
}, 300));

destinationInput.addEventListener('input', debounce(function () {
    if (isProgrammaticChange) {
        isProgrammaticChange = false; // Reset the flag
        return;
    }
    var query = destinationInput.value.trim();
    if (query.length >= minQueryLength) {
        search(query, destinationList);
    } else {
        clearResults(destinationList);
    }
}, 300));

// Function to fetch autocomplete results
function search(query, resultList) {
    // Show loading indicator
    resultList.innerHTML = '<li>Loading...</li>';
    resultList.classList.add('show');

    fetch('?resource=flights&action=autocomplete&query=' + query)
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            displayResults(data, resultList);
        })
        .catch(error => {
            console.error('Error fetching results:', error);
            clearResults(resultList);
        });
}

// Function to display results in the dropdown
function displayResults(results, resultList) {
    clearResults(resultList);

    if (results.length === 0) {
        resultList.innerHTML = '<li>No results found</li>';
        resultList.classList.add('show');
        return;
    }

    var cities = {};
    results.forEach(function (result) {
        var city = result.municipality;
        if (!cities[city]) {
            cities[city] = [];
        }
        cities[city].push({
            name: result.name,
            iata_code: result.iata_code
        });
    });

    for (var city in cities) {
        var cityItem = document.createElement('li');
        cityItem.textContent = city;
        cityItem.classList.add('city-item');
        resultList.appendChild(cityItem);

        var airportsList = document.createElement('ul');
        airportsList.classList.add('airports-list');
        cities[city].forEach(function (airport) {
            var airportItem = document.createElement('li');
            airportItem.textContent = airport.name + ' (' + airport.iata_code + ')';
            airportItem.dataset.name = airport.name;
            airportItem.dataset.iata_code = airport.iata_code;
            airportItem.classList.add('airport-item');
            airportsList.appendChild(airportItem);
        });

        cityItem.appendChild(airportsList);
    }

    // Show results list
    resultList.classList.add('show');

    // Add click event listener to each airport item
    resultList.querySelectorAll('.airport-item').forEach(function (airportItem) {
        airportItem.addEventListener('click', function () {
            var selectedName = this.dataset.name;
            var selectedIataCode = this.dataset.iata_code;

            // Set the flag to prevent triggering the input event
            isProgrammaticChange = true;

            // Update the input field with the selected airport's name
            if (resultList === originList) {
                searchInput.value = `${selectedName} (${selectedIataCode})`;
            } else if (resultList === destinationList) {
                destinationInput.value = `${selectedName} (${selectedIataCode})`;
            }
            clearResults(resultList);
        });
    });

    // Keyboard navigation support
    handleKeyboardNavigation(resultList);
}

// Function to handle keyboard navigation
function handleKeyboardNavigation(resultList) {
    let selectedIndex = -1;

    resultList.addEventListener('keydown', function (event) {
        const items = resultList.querySelectorAll('.airport-item');
        if (event.key === 'ArrowDown') {
            selectedIndex = (selectedIndex + 1) % items.length;
            updateSelection(items, selectedIndex);
            event.preventDefault();
        } else if (event.key === 'ArrowUp') {
            selectedIndex = (selectedIndex - 1 + items.length) % items.length;
            updateSelection(items, selectedIndex);
            event.preventDefault();
        } else if (event.key === 'Enter') {
            if (selectedIndex >= 0) {
                items[selectedIndex].click(); // Trigger click on the selected item
            }
        }
    });
}

// Function to update the selection visually
function updateSelection(items, index) {
    items.forEach((item, i) => {
        item.classList.toggle('selected', i === index);
    });
}

// Function to clear results
function clearResults(resultList) {
    resultList.innerHTML = '';
    resultList.classList.remove('show'); // Hide results list
}
