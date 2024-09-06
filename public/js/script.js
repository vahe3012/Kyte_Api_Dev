// ------ Login window ------
let loginBtn = document.querySelector('.login-btn'),
    loginBtnClose = document.querySelector('.login-window__close'),
    loginWindow = document.querySelector('.login-window');

loginBtn.addEventListener('click', function (e) {
    e.stopPropagation()
    loginWindow.classList.toggle('show')
});

loginWindow.addEventListener('click', function (e) {
    e.stopPropagation()
})

loginBtnClose.addEventListener('click', function () {
    loginWindow.classList.remove('show')
})

document.addEventListener('click', function () {
    loginWindow.classList.remove('show')
})

// ------ Mobile menu ------
let navigation = document.querySelector('.navigation'),
    menuBurger = document.querySelector('.menu-burger'),
    menuBurgerClose = document.querySelector('.menu-burger-close')


menuBurger.addEventListener('click', function () {
    document.body.classList.toggle('overflow-hidden')
    navigation.classList.add('open');
});

menuBurgerClose.addEventListener('click', function () {
    document.body.classList.remove('overflow-hidden')
    navigation.classList.remove('open');
});

// ------ Passenger-window ------
// let choosePassenger = document.querySelector('.choose-passenger'),
//     choosePassengerBtn = document.querySelectorAll('.choose-passenger__btn'),
//     passengerWindow = document.querySelectorAll('.passenger-window'),
//     passengerBtns = document.querySelectorAll('.passenger-btns__btn')
//     travellersBtns = document.querySelectorAll('.travellersBtn'),
//     cabinClassBtns = document.querySelectorAll('.cabinClassBtn'),
//     travellersCounts = document.querySelectorAll('.travellers-counts'),
//     cabinClasses = document.querySelectorAll('.cabin-class');
//
// if (choosePassenger) {
//     function addActiveClass() {
//         passengerBtns.forEach(pasBtns => {
//             pasBtns.addEventListener('click', () => {
//                 const btnsActive = document.querySelectorAll('.passenger-btns__btn.passenger-btns__btn_active');
//                 btnsActive.forEach(typeIsActive => {
//                     typeIsActive.classList.remove('passenger-btns__btn_active')
//                 })
//                 pasBtns.classList.add('passenger-btns__btn_active');
//             })
//         })
//     }
//
//     cabinClassBtns.forEach(cabinClassBtn => {
//         cabinClassBtn.addEventListener("click", function () {
//             let cabinBlock = cabinClassBtn.parentElement.parentElement.nextElementSibling.querySelector('.cabin-class')
//             let travellersBlock = cabinClassBtn.parentElement.parentElement.nextElementSibling.querySelector('.travellers-counts')
//             travellersBlock.style.display = 'none';
//             cabinBlock.style.display = 'block';
//             addActiveClass()
//         });
//     });
//
//     travellersBtns.forEach(travellersBtn => {
//         travellersBtn.addEventListener("click", function () {
//             let cabinBlock = travellersBtn.parentElement.parentElement.nextElementSibling.querySelector('.cabin-class')
//             let travellersBlock = travellersBtn.parentElement.parentElement.nextElementSibling.querySelector('.travellers-counts')
//             travellersBlock.style.display = 'block';
//             cabinBlock.style.display = 'none';
//             addActiveClass()
//         });
//     });
//
//     choosePassengerBtn.forEach(choosePassengerBtn => {
//         choosePassengerBtn.addEventListener("click", function (e) {
//             e.stopPropagation()
//             const pasWindow = choosePassengerBtn.nextElementSibling;
//             pasWindow.classList.toggle('show');
//         });
//     })
//
//     passengerWindow.forEach(pasWindow => {
//         pasWindow.addEventListener("click", function (e) {
//             e.stopPropagation()
//         });
//     })
//
//     if (![...passengerWindow].some(pasWindow => pasWindow.classList.contains('show'))) {
//         document.addEventListener("click", function () {
//             passengerWindow.forEach(pasWindow => pasWindow.classList.remove('show'));
//         });
//     }
// }

// ------ According filters ------
let accordingFiltersBtn = document.querySelectorAll('.according-filters-btn'),
    accordingFiltersContent = document.querySelectorAll('.according-filters-content');

accordingFiltersBtn.forEach(acFilBtn => {
    acFilBtn.addEventListener('click', () => {
        acFilBtn.nextElementSibling.classList.toggle('open');
        let flightsArrow = acFilBtn.querySelector('.flights-arrow');
        if (flightsArrow) {
            flightsArrow.classList.toggle('active');
        }
    })

});

// ------ Flights filters aside ------
let filtersAsideBtn = document.querySelector('.flights-filters-aside-btn'),
    flightsFiltersAside = document.querySelector('.flights-filters-aside'),
    filtersAsideBtnClose = document.querySelector('.flights-filters-aside__btn-close');

if (flightsFiltersAside) {
    filtersAsideBtn.addEventListener('click', function () {
        document.body.classList.toggle('overflow-hidden')
        flightsFiltersAside.classList.add('open');
    });

    filtersAsideBtnClose.addEventListener('click', function () {
        document.body.classList.remove('overflow-hidden')
        flightsFiltersAside.classList.remove('open');
    });
}

// ------ Modal booking ------
let modalBookingBg = document.querySelector('.modal-booking-bg'),
    modalBooking = document.querySelector('.modal-booking'),
    bookingBtn = document.querySelector('.booking-btn'),
    modalBookingClose = document.querySelector('.modal-booking__close');

if (modalBookingBg) {
    function BookingClose() {
        document.body.classList.remove('overflow-hidden')
        modalBookingBg.classList.remove('show');
    }

    bookingBtn.addEventListener('click', function () {
        document.body.classList.toggle('overflow-hidden')
        modalBookingBg.classList.add('show');
    });

    modalBookingBg.addEventListener('click', function () {
        BookingClose()
    });

    modalBookingClose.addEventListener('click', function () {
        BookingClose()
    });

    modalBooking.addEventListener('click', function (e) {
        e.stopPropagation()
    })
}


// ------ Flights filter function ------
let flightsWayContent = document.querySelector('.flights-way-content')
if (flightsWayContent) {
    document.addEventListener("DOMContentLoaded", () => flightsFilterFunc(document.querySelector('.flights-steps__btn_active'), 'return'));
    function flightsFilterFunc(clickedButton, category) {
        document.querySelectorAll('.flights-way-block').forEach(item =>
            item.classList.toggle('show', item.dataset.category === category)
        );
        document.querySelectorAll('.flights-steps__btn').forEach(button =>
            button.classList.remove('flights-steps__btn_active')
        );
        clickedButton.classList.add('flights-steps__btn_active');
    }

    let multiCityBlock = document.querySelector('.multiCity-block'),
        flightsWayCloneBbtn = document.querySelector('.flights-way-clone-btn'),
        flightsWay = document.querySelector('.another-flight-item');


    function countFlightItems() {
        return multiCityBlock.querySelectorAll('.another-flight-item').length;
    }

    flightsWayCloneBbtn.addEventListener('click', () => {
        if (countFlightItems() < 5) {
            let clonedFlightsWay = flightsWay.cloneNode(true);
            multiCityBlock.insertBefore(clonedFlightsWay, flightsWayCloneBbtn);
        } else {
            alert('You can only add up to 5 flight items.');
        }
    })

    multiCityBlock.addEventListener('click', function (event) {
        if (event.target.classList.contains('remove-btn')) {
            event.target.parentElement.remove();
        }
    });
}


// ------ Main silde ------
let sliderSection = document.querySelectorAll('.slider-section')
if (sliderSection) {
    const mainSlide = new Swiper(".main-slide", {
        autoplay: {
            delay: 2000,
        },
        speed: 600,
        parallax: true,
        loop: true,
    })
}

// ------ Hotels silde ------
let sliderSectionHotels = document.querySelectorAll('.slider-section')
if (sliderSectionHotels) {
    const hotelsSlide = new Swiper(".hotels-slide ", {
        slidesPerView: 2,
        spaceBetween: 20,
        speed: 600,
        parallax: true,
        loop: true,
        pagination: {
            el: '.swiper-pagination',
            type: 'bullets',
            clickable: true,
        },
        breakpoints: {
            300: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            481: {
                slidesPerView: 2,
                spaceBetween: 20
            },
            767: {
                slidesPerView: 3,
                spaceBetween: 20
            },
            1025: {
                slidesPerView: 2,
                spaceBetween: 20
            }
        }
    })
}

// ------ Range slider ------
let rangeSection = document.querySelector('.range-section')
if (rangeSection) {
    var $range = $(".js-range-slider"),
        $inputFrom = $(".js-input-from"),
        $inputTo = $(".js-input-to"),
        instance,
        min = 0,
        max = 708000,
        from = 0,
        to = 0;

    $range.ionRangeSlider({
        skin: "round",
        type: "double",
        min: min,
        max: max,
        from: 0,
        to: 708000,
        onStart: updateInputs,
        onChange: updateInputs
    });
    instance = $range.data("ionRangeSlider");

    function updateInputs(data) {
        from = data.from;
        to = data.to;

        $inputFrom.prop("value", from);
        $inputTo.prop("value", to);
    }

    $inputFrom.on("input", function () {
        var val = $(this).prop("value");
        if (val < min) {
            val = min;
        } else if (val > to) {
            val = to;
        }

        instance.update({
            from: val
        });
    });

    $inputTo.on("input", function () {
        var val = $(this).prop("value");

        // validate
        if (val < from) {
            val = from;
        } else if (val > max) {
            val = max;
        }

        instance.update({
            to: val
        });
    });
}

// ------ Seat information ------
// let seateLabel = document.querySelectorAll('.seat label');

// seateLabel.forEach(seateLabelItem  => {
//     seateLabelItem.addEventListener('mouseover', () => {
//         seateInfo = seateLabelItem.nextElementSibling
//         seateInfo.classList.add('show')
//     })
//     seateLabelItem.addEventListener('mouseleave', () => {
//         seateInfo = seateLabelItem.nextElementSibling
//         seateInfo.classList.remove('show')
//     })
// })
