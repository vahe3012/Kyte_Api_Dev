$(document).ready(function () {


    function getFlightInputs(flightType) {
        const baseInputs = [
            { selector: '#origin', message: 'Please fill the origin input.' },
            { selector: '#destination', message: 'Please fill the destination input.' },
            { selector: '#departId', message: 'Please select a departure date.' },
        ];

        if (flightType === 'return') {
            baseInputs.push({ selector: '#returnId', message: 'Please select a return date.' });
        }

        return baseInputs;
    }

    function validateInputs(block, flightInputs, flightType) {
        let hasError = false;
        const flightData = {};

        flightInputs.forEach(input => {
            const inputElement = block.find(input.selector);
            const value = inputElement.val().trim();

            if (!value) {
                showError(inputElement, input.message);
                hasError = true;
            } else {
                flightData[input.selector.replace('#', '')] = value; // Store valid input values
            }
        });

        // Validate dates
        hasError = validateDates(block, flightType) || hasError;

        return { hasError, flightData };
    }



    $('.flights-search__btn').on('click', function () {
        const activeBlock = $('.flights-way-block.show');

        if (!activeBlock.length) {
            console.error("No active block found!");
            return;
        }

        const flightType = activeBlock.data('type');
        const flightInputs = getFlightInputs(flightType);

        // Clear previous error messages
        clearErrors(activeBlock);

        // Perform validation and collect flight data
        const { hasError, flightData } = validateInputs(activeBlock, flightInputs, flightType);

        if (hasError) {
            console.error("Validation failed! Please fill all required inputs correctly.");
            return;
        }

        const passengers = createPassengers(activeBlock);
        const journeys = createJourneys(flightType, flightData);

        const requestData = {
            journeys: journeys,
            cabinType: getSelectedCabinClass(activeBlock),
            passengers: passengers,
        };

        fetch('?resource=flights&action=search', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(requestData)
        })
            .then(response => response.json())
            .then(data => {
                // displayFlightInfo(data);
                console.log('API Response:', data);
            })
            .catch(error => {
                console.error('Error:', error);
            });
    });



    function validateDates(block, flightType) {
        let hasError = false;
        const today = new Date();
        today.setHours(0, 0, 0, 0); // Reset time for accurate comparison

        const departDateInput = block.find('#departId').val().trim();
        if (validateDate(departDateInput, today, block.find('#departId'))) {
            hasError = true;
        }

        if (flightType === 'return') {
            const returnDateInput = block.find('#returnId').val().trim();
            if (validateDate(returnDateInput, today, block.find('#returnId'))) {
                hasError = true;
            }
        }

        return hasError;
    }

    function validateDate(dateInput, today, inputElement) {
        const date = new Date(dateInput);
        if (dateInput && !isNaN(date.getTime()) && date < today) {
            showError(inputElement, 'Date cannot be in the past.');
            return true; // Error occurred
        }
        return false; // No error
    }

    function createPassengers(activeBlock) {
        const adults = parseInt(activeBlock.find('#adults').val()) || 0;
        const children = parseInt(activeBlock.find('#children').val()) || 0;
        const infants = parseInt(activeBlock.find('#infants').val()) || 0;

        const passengers = [];
        for (let i = 0; i < adults; i++) {
            passengers.push({ age: 30 });
        }
        for (let i = 0; i < children; i++) {
            passengers.push({ age: 10 });
        }
        for (let i = 0; i < infants; i++) {
            passengers.push({ age: 1 });
        }
        return passengers;
    }

    function createJourneys(flightType, flightData) {

        const journeys = [];
        const { origin, destination, departId, returnId } = flightData;

        const originIataCode = extractIataCode(origin);
        const destinationIataCode = extractIataCode(destination);

        if (flightType === 'return') {
            journeys.push(
                {
                    "departureAirport": originIataCode,
                    "arrivalAirport": destinationIataCode,
                    "date": { "main": departId }
                },
                {
                    "departureAirport": destinationIataCode,
                    "arrivalAirport": originIataCode,
                    "date": { "main": returnId }
                }
            );
        } else if (flightType === 'one-way') {

            console.log(originIataCode, "iata")
            journeys.push({
                "departureAirport": originIataCode,
                "arrivalAirport": destinationIataCode,
                "date": { "main": departId }
            });
        } else if (flightType === 'multi-city') {
            const multiCityJourneys = getMultiCityJourneys();
            journeys.push(...multiCityJourneys);
        }
        return journeys;
    }

    function getMultiCityJourneys() {
        const journeyInputs = document.querySelectorAll('.multi-city-input'); // Add appropriate selectors for your inputs
        const journeys = [];

        journeyInputs.forEach(function(input) {
            const originValue = input.querySelector('.origin-input').value;
            const destinationValue = input.querySelector('.destination-input').value;
            const dateValue = input.querySelector('.date-input').value;

            const originIataCode = extractIataCode(originValue);
            const destinationIataCode = extractIataCode(destinationValue);

            journeys.push({
                "departureAirport": originIataCode,
                "arrivalAirport": destinationIataCode,
                "date": { "main": dateValue }
            });
        });

        return journeys;
    }

    function extractIataCode(value = '') {
        const match = value.match(/\(([^)]+)\)$/);
        return match?.[1] || null;
    }
    function getSelectedCabinClass(block) {
        const selectedCheckbox = block.find('.cabin-class-checkbox:checked');
        if (selectedCheckbox.length === 0) {
            console.error("No cabin class selected.");
            return null;
        }

        // Return the data-type attribute value of the selected checkbox
        return selectedCheckbox.data('type');
    }

    function clearErrors(block) {
        block.find('.error-message').remove();
    }

    function showError(inputElement, message) {
        const errorMessage = `<p class="error-message" style="color: red; font-size: 14px;">${message}</p>`;
        inputElement.after(errorMessage);
    }
});
