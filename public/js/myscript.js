// Passenger-window functionality
document.addEventListener('DOMContentLoaded', function () {
    // Elements selection
    let choosePassenger = document.querySelector('.choose-passenger'),
        choosePassengerBtn = document.querySelector('.choose-passenger__btn'),
        passengerWindow = document.querySelector('.passenger-window'),
        travellersBtn = document.querySelector('#travellersBtn'),
        cabinClassBtn = document.querySelector('#cabinClassBtn'),
        travellersCounts = document.querySelector('.travellers-counts'),
        cabinClass = document.querySelector('.cabin-class'),
        doneBtn = document.querySelector('.passenger-done-btn'),
        decrementBtns = document.querySelectorAll('.decrement-btn'),
        incrementBtns = document.querySelectorAll('.increment-btn'),
        checkboxes = document.querySelectorAll('.cabin-class-checkbox');

    // Functions
    function resetPassengerWindow() {
        cabinClass.style.display = 'none';
        travellersCounts.style.display = 'block';
        cabinClassBtn.classList.remove('passenger-btns__btn_active');
        travellersBtn.classList.add('passenger-btns__btn_active');
    }

    function updatePassengerCount() {
        const adults = parseInt(document.getElementById('adults').value) || 0;
        const children = parseInt(document.getElementById('children').value) || 0;
        const infants = parseInt(document.getElementById('infants').value) || 0;
        const totalPassengers = adults + children + infants;

        choosePassengerBtn.innerHTML = `${totalPassengers} Passenger${totalPassengers > 1 ? 's' : ''}
        <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M17.0572 6.28543C16.8345 6.06281 16.5325 5.93774 16.2177 5.93774C15.9028 5.93774 15.6008
            6.06281 15.3781 6.28543L9.49997 12.1636L3.62185 6.28543C3.39788 6.06911 3.09792 5.94942 2.78656
            5.95213C2.4752 5.95483 2.17736 6.07972 1.95719 6.29989C1.73702 6.52006 1.61213 6.8179 1.60942 7.12926C1.60672
            7.44062 1.72641 7.74059 1.94272 7.96455L8.66041 14.6822C8.8831 14.9049 9.18509 15.0299 9.49997 15.0299C9.81486
             15.0299 10.1168 14.9049 10.3395 14.6822L17.0572 7.96455C17.2798 7.74186 17.4049 7.43987 17.4049 7.12499C17.4049
             6.81011 17.2798 6.50812 17.0572 6.28543Z" fill="#142A38"/>
        </svg>`;
    }

    function getSelectedCabinClass() {
        const cabinClasses = ['economy', 'premiumEconomy', 'business', 'first'];
        for (let i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].checked) {
                return cabinClasses[i];
            }
        }
        return 'economy'; // Default cabin class if none selected
    }

    // Attach getSelectedCabinClass to the window object
    window.getSelectedCabinClass = getSelectedCabinClass;

    function handleCheckboxChange(event) {
        if (event.target.checked) {
            checkboxes.forEach(otherCheckbox => {
                if (otherCheckbox !== event.target) {
                    otherCheckbox.checked = false;
                }
            });
        }
    }

    // Event Listeners
    if (choosePassenger) {
        choosePassengerBtn.addEventListener("click", function (e) {
            e.stopPropagation();
            passengerWindow.classList.toggle('show');
            resetPassengerWindow();
        });

        passengerWindow.addEventListener("click", function (e) {
            e.stopPropagation();
        });

        document.addEventListener("click", function (e) {
            if (!passengerWindow.contains(e.target) && !choosePassengerBtn.contains(e.target)) {
                passengerWindow.classList.remove('show');
                resetPassengerWindow();
                updatePassengerCount();
            }
        });

        if (cabinClassBtn) {
            cabinClassBtn.addEventListener("click", function () {
                travellersCounts.style.display = 'none';
                cabinClass.style.display = 'block';
                travellersBtn.classList.remove('passenger-btns__btn_active');
                this.classList.add('passenger-btns__btn_active');
            });


            travellersBtn.addEventListener("click", function () {
                resetPassengerWindow();
            });

            decrementBtns.forEach(button => {
                button.addEventListener('click', () => {
                    const input = button.nextElementSibling;
                    if (input.name === 'adults' && input.value > 1) {
                        input.value--;
                    } else if (input.value > 0 && input.name !== 'adults') {
                        input.value--;
                    }
                });
            });

            incrementBtns.forEach(button => {
                button.addEventListener('click', () => {
                    const input = button.previousElementSibling;
                    input.value++;
                });
            });

            doneBtn.addEventListener('click', () => {
                passengerWindow.classList.remove('show');
                updatePassengerCount();
            });

            checkboxes.forEach(checkbox => {
                checkbox.addEventListener('change', handleCheckboxChange);
            });
        }
    }
});


