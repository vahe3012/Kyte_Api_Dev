// ------ Collect Data and Send to Backend ------
$(document).ready(function () {
    $('.flights-search__btn').on('click', function () {

        const activeBlock = $('.flights-way-block.show');
        if (activeBlock.length === 0) {
            console.error("No active block found!");
            return;
        }
        const flightType = activeBlock.data('type'); // Get flight type (return, one-way, multi-city)

        const origin = activeBlock.find('#origin').val().trim();
        const destination = activeBlock.find('#destination').val().trim();
        const departDate = activeBlock.find('#departId').val().trim();
        const returnDate = flightType === 'return'
            ? activeBlock.find('#returnId').val().trim()
            : null;

        // Log the collected flight data
        const flightData = { flightType, origin, destination, departDate, returnDate };
        console.log("Flight Data:", flightData);
        // const flightType = activeBlock.data('category');
        //
        // const originValue = activeBlock.find('.origin-input').val();
        // const destinationValue = activeBlock.find('.destination-input').val();
        // const departDate = activeBlock.find('.depart-date').val();
        // const returnDate = flightType === 'return' ? activeBlock.find('.return-date').val() : null;

        const originIataCode = extractIataCode(origin);
        const destinationIataCode = extractIataCode(destination);

        console.log(flightType, origin, destination,
            departDate, returnDate)

        // Collect passenger data
        const adults = parseInt(activeBlock.find('input[data-passenger-type="adults"]').val()) || 0;
        const children = parseInt(activeBlock.find('input[data-passenger-type="children"]').val()) || 0;
        const infants = parseInt(activeBlock.find('input[data-passenger-type="infants"]').val()) || 0;

        // Use the retrieved values as needed
        console.log(activeBlock, { adults, children, infants });


        console.log(getSelectedCabinClass(activeBlock), "esa exav")




        function extractIataCode(value = '') {
            const match = value.match(/\(([^)]+)\)$/);
            return match?.[1] || null;
        }

        function getMultiCityJourneys(block) {
            const journeyInputs = block.find('.multi-city-input'); // Ensure it only finds inputs in the active block
            const journeys = [];

            journeyInputs.each(function () {
                const originValue = $(this).find('.origin-input').val();
                const destinationValue = $(this).find('.destination-input').val();
                const dateValue = $(this).find('.date-input').val();

                const originIataCode = extractIataCode(originValue);
                const destinationIataCode = extractIataCode(destinationValue);

                journeys.push({
                    "departureAirport": originIataCode,
                    "arrivalAirport": destinationIataCode,
                    "date": {
                        "main": dateValue
                    }
                });
            });

            return journeys;
        }


        function getSelectedCabinClass(block) {
            const selectedCheckbox = block.find('.cabin-class-checkbox:checked');
            if (selectedCheckbox.length === 0) {
                console.error("No cabin class selected.");
                return null;
            }

            return selectedCheckbox
                .closest('.cabin-class__item')
                .find('.passenger-info__title')
                .text()
                .trim();
        }

        // const activeBlock = $(this).closest('.flights-way-block');
        //
        // // Get passenger counts dynamically using class selectors
        // const adults = Math.max(parseInt(activeBlock.find('.adults').val()) || 0, 1);
        // const children = parseInt(activeBlock.find('.children').val()) || 0;
        // const infants = parseInt(activeBlock.find('.infants').val()) || 0;
        //
        // const passengersData = {
        //     adults: adults,
        //     children: children,
        //     infants: infants
        // };
        //
        // // Example: Sending data to the API
        // console.log(passengersData);




        // Send data using Fetch API
        // fetch('/api/search-flights', {
        //     method: 'POST',
        //     headers: {'Content-Type': 'application/json'},
        //     body: JSON.stringify(searchData)
        // })
        //     .then(response => response.json())
        //     .then(data => console.log('Response:', data))
        //     .catch(error => console.error('Error:', error));
    });
});


// flights-search__btn

// const apiUrl = 'http://yourapi.com'; // Replace with your API URL
//
//
// var searchButton = document.querySelector('.flights-search__btn');
// var flightFiltersSection = document.querySelector('.flights-filters-section');
// var flightType = 'return'; // Default flight type
//
//
// // Capture flight type
// document.querySelectorAll('.flights-steps__btn').forEach(function(button) {
//     button.addEventListener('click', function() {
//         document.querySelectorAll('.flights-steps__btn').forEach(btn => btn.classList.remove('flights-steps__btn_active'));
//         button.classList.add('flights-steps__btn_active');
//         flightType = button.getAttribute('data-flight-type');
//     });
// });
//
// searchButton.addEventListener('click', function () {
//     flightFiltersSection.classList.add('show');
//     var originValue = searchInput.value;
//     var destinationValue = destinationInput.value;
//     var departDate = document.getElementById('departId').value;
//     var returnDate = document.getElementById('returnId').value;
//
//     var originIataCode = extractIataCode(originValue);
//     var destinationIataCode = extractIataCode(destinationValue);
//     //
//     // console.log(originValue, destinationValue, "esa")
//     // console.log(originIataCode, destinationIataCode)
//
//     var adults = parseInt(document.getElementById('adults').value, 10);
//     var children = parseInt(document.getElementById('children').value, 10);
//     var infants = parseInt(document.getElementById('infants').value, 10);
//
//
//     console.log(adults,children,infants)
//
//     var passengers = [];
//     for (var i = 0; i < adults; i++) {
//         passengers.push({age: 30});
//     }
//     for (var i = 0; i < children; i++) {
//         passengers.push({age: 10});
//     }
//     for (var i = 0; i < infants; i++) {
//         passengers.push({age: 1});
//     }
//     var cabinClass = getSelectedCabinClass();
//
//     var journeys = [];
//
//     if (flightType === 'return') {
//         journeys.push({
//             "departureAirport": originIataCode,
//             "arrivalAirport": destinationIataCode,
//             "date": {
//                 "main": departDate
//             }
//         }, {
//             "departureAirport": destinationIataCode,
//             "arrivalAirport": originIataCode,
//             "date": {
//                 "main": returnDate
//             }
//         });
//     } else if (flightType === 'one-way') {
//         journeys.push({
//             "departureAirport": originIataCode,
//             "arrivalAirport": destinationIataCode,
//             "date": {
//                 "main": departDate
//             }
//         });
//     } else if (flightType === 'multi-city') {
//         // Assuming multi-city inputs are available
//         var multiCityJourneys = getMultiCityJourneys(); // Implement this function to get multi-city journeys
//         journeys = journeys.concat(multiCityJourneys);
//     }
//
//     var requestData = {
//         journeys: journeys,
//         cabinType: cabinClass,
//         passengers: passengers
//     };
//
//     fetch('?resource=flights&action=search', {
//         method: 'POST',
//         headers: {
//             'Content-Type': 'application/json'
//         },
//         body: JSON.stringify(requestData)
//     })
//         .then(response => response.json())
//         .then(data => {
//             displayFlightInfo(data);
//             console.log('API Response:', data);
//         })
//         .catch(error => {
//             console.error('Error:', error);
//         });
// });
//
// function getMultiCityJourneys() {
//     var journeyInputs = document.querySelectorAll('.multi-city-input'); // Add appropriate selectors for your inputs
//     var journeys = [];
//
//     journeyInputs.forEach(function(input) {
//         var originValue = input.querySelector('.origin-input').value;
//         var destinationValue = input.querySelector('.destination-input').value;
//         var dateValue = input.querySelector('.date-input').value;
//
//         var originIataCode = extractIataCode(originValue);
//         var destinationIataCode = extractIataCode(destinationValue);
//
//         journeys.push({
//             "departureAirport": originIataCode,
//             "arrivalAirport": destinationIataCode,
//             "date": {
//                 "main": dateValue
//             }
//         });
//     });
//
//     return journeys;
// }
// function extractIataCode(value) {
//     var match = value.match(/\(([^)]+)\)$/);
//     return match ? match[1] : null;
// }
//
//
// async function searchFlights() {
//     const from = document.getElementById('from').value;
//     const to = document.getElementById('to').value;
//     const date = document.getElementById('date').value;
//
//     const response = await fetch(`${apiUrl}/search?from=${from}&to=${to}&date=${date}`);
//     const data = await response.json();
//
//     displaySearchResults(data);
// }
//
// async function autocomplete() {
//     const query = document.getElementById('autocomplete-input').value;
//
//     const response = await fetch(`${apiUrl}/autocomplete?query=${query}`);
//     const data = await response.json();
//
//     displayAutocompleteResults(data);
// }
//
// function displaySearchResults(results) {
//     const resultsDiv = document.getElementById('results');
//     resultsDiv.innerHTML = '';
//
//     results.forEach(result => {
//         const resultItem = document.createElement('div');
//         resultItem.textContent = `${result.flight} - ${result.price}`;
//         resultsDiv.appendChild(resultItem);
//     });
// }
//
// function displayAutocompleteResults(results) {
//     const resultsList = document.getElementById('autocomplete-results');
//     resultsList.innerHTML = '';
//
//     results.forEach(result => {
//         const resultItem = document.createElement('li');
//         resultItem.textContent = result;
//         resultsList.appendChild(resultItem);
//     });
// }
