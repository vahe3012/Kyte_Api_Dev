// ------ Flights filter function ------
let flightsWayContent = document.querySelector('.flights-way-content')
if (flightsWayContent) {
    document.addEventListener("DOMContentLoaded", () => flightsFilterFunc(document.querySelector('.flights-steps__btn_active'), 'return'));

    function flightsFilterFunc(clickedButton, type) {
        document.querySelectorAll('.flights-way-block').forEach(item =>
            item.classList.toggle('show', item.dataset.type === type)
        );
        document.querySelectorAll('.flights-steps__btn').forEach(button =>
            button.classList.remove('flights-steps__btn_active')
        );
        clickedButton.classList.add('flights-steps__btn_active');
    }

    const multiCityBlock = document.querySelector('.multiCity-block');
    const flightsWayCloneBtn = document.querySelector('.flights-way-clone-btn');
    const flightsWay = document.querySelector('.another-flight-item');



    // Attach event listener to the button that adds new flight blocks
    flightsWayCloneBtn.addEventListener('click', () => {
        const flightItems = multiCityBlock.querySelectorAll('.another-flight-item');

        if (flightItems.length < 5) {
            // Clone the flight block and clear input values
            const clonedFlightBlock = flightsWay.cloneNode(true);
            clonedFlightBlock.querySelectorAll('input').forEach(input => input.value = '');

            // Insert the cloned block before the "Add Flight" button
            multiCityBlock.insertBefore(clonedFlightBlock, flightsWayCloneBtn);

            // Re-initialize autocomplete for the newly added flight block
            setupAutocompleteForBlock(clonedFlightBlock);
        } else {
            alert('You can only add up to 5 flight items.');
        }
    });
    // // Add new flight item when clicking the clone button
    // flightsWayCloneBtn.addEventListener('click', () => {
    //     if (multiCityBlock.querySelectorAll('.another-flight-item').length < 5) {
    //         const clonedFlightsWay = flightsWay.cloneNode(true);
    //         multiCityBlock.insertBefore(clonedFlightsWay, flightsWayCloneBtn);
    //         setupAutocompleteForBlock(clonedFlightsWay); // Initialize autocomplete for the new block
    //     } else {
    //         alert('You can only add up to 5 flight items.');
    //     }
    // });
    //
    // Remove flight item on clicking the remove button
    multiCityBlock.addEventListener('click', event => {
        if (event.target.classList.contains('remove-btn')) {
            event.target.closest('.another-flight-item').remove();
        }
    });
    //
    // // Initialize autocomplete for all existing blocks on page load
    // setupAutocompleteForAllBlocks();
}

/* Passengers and Cabin class logic */
$(document).ready(function () {
    const initializedWindows = new Set(); // Track initialized windows

    // Initialize only when the button is clicked for the first time
    $('.choose-pas-btn').on('click', function (e) {
        const windowNumber = $(this).data('window');

        // Initialize the window if not already initialized
        if (!initializedWindows.has(windowNumber)) {
            setupPassengerWindow(windowNumber);
            initializedWindows.add(windowNumber);
        }

        // Toggle the passenger window
        e.stopPropagation();
        const pasWindow = $(`.pas-window[data-window="${windowNumber}"]`);
        pasWindow.toggleClass('show');
    });

    function setupPassengerWindow(windowNumber) {
        const pasWindow = $(`.pas-window[data-window="${windowNumber}"]`);
        pasWindow.click((e) => e.stopPropagation());
        $(document.body).click(() => pasWindow.removeClass('show'));

        pasWindow.find('.increment-btn').click(function () {
            const $inputField = $(this).siblings('.quantity-input');
            $inputField.val(parseInt($inputField.val()) + 1);
            updatePassengerCount(windowNumber);
        });

        pasWindow.find('.decrement-btn').click(function () {
            const $inputField = $(this).siblings('.quantity-input');
            let currentValue = parseInt($inputField.val());
            const isAdult = $inputField.attr('data-passenger-type') === 'adults';
            if ((isAdult && currentValue > 1) || (!isAdult && currentValue > 0)) {
                $inputField.val(currentValue - 1);
            }
            updatePassengerCount(windowNumber);
        });

        function updatePassengerCount(windowNumber) {
            const activeBlock = $('.flights-way-block.show');
            // if (activeBlock.length) {
                const adults = parseInt(activeBlock.find('input[data-passenger-type="adults"]').val()) || 1;
                const children = parseInt(activeBlock.find('input[data-passenger-type="children"]').val()) || 0;
                const infants = parseInt(activeBlock.find('input[data-passenger-type="infants"]').val()) || 0;
                const total = adults + children + infants;

            $(`.choose-passenger-count[data-window="${windowNumber}"]`).text(total);
        }

        pasWindow.find('.pas-done-btn').click(() => {
            pasWindow.removeClass('show');
            updatePassengerCount(windowNumber);
        });

        pasWindow.find('.travellersBtn').click(function () {
            toggleActiveButton($(this), 'cabinClassBtn');
            toggleView(pasWindow, '.travellers-counts', '.cabin-class');
        });

        pasWindow.find('.cabinClassBtn').click(function () {
            toggleActiveButton($(this), 'travellersBtn');
            toggleView(pasWindow, '.cabin-class', '.travellers-counts');
        });

        pasWindow.find('.cabin-class-checkbox').change(function () {
            pasWindow.find('.cabin-class-checkbox').not(this).prop('checked', false);
        });

        function toggleActiveButton(btn, siblingClass) {
            btn.closest('.passenger-window-header')
                .find(`.${siblingClass}`)
                .removeClass('passenger-btns__btn_active');
            btn.addClass('passenger-btns__btn_active');
        }

        function toggleView(window, showSelector, hideSelector) {
            window.find(hideSelector).hide();
            window.find(showSelector).show();
        }
    }
});