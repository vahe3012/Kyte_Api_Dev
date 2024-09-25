
// ------ Passenger-window logic------
$(document).ready(function() {
// ------ Passenger one ------

    // Passenger btn click window function
    const choosePasBtn1 = $('.choose-pas-btn1'),
        pasWindow1 = $('.pas-window1')

    choosePasBtn1.click((e) => {
        e.stopPropagation()
        pasWindow1.toggleClass('show')
        updatePassingerWindow1()
    })

    pasWindow1.click((e) => {
        e.stopPropagation()
    })

    $(document.body).click(() => {
        pasWindow1.removeClass('show')
    })

    // Increment and decrement functions
    $('.increment-btn1').on('click', function() {
        const $inputField1 = $(this).siblings('.quantity-input1');
        let currentValue1 = parseInt($inputField1.val());
        $inputField1.val(currentValue1 + 1);
        updatePassengerCount1()
    });

    $('.decrement-btn1').on('click', function() {
        const $inputField1 = $(this).siblings('.quantity-input1');
        let currentValue1 = parseInt($inputField1.val());
        if ($inputField1.attr('id') === 'adults1' && currentValue1 > 1) {
            $inputField1.val(currentValue1 - 1);
        } else if ($inputField1.attr('id') !== 'adults1' && currentValue1 > 0) {
            $inputField1.val(currentValue1 - 1);
        }
        updatePassengerCount1()
    });
    function updatePassengerCount1() {
        let adults1 = parseInt($('#adults1').val()) || 0;
        let children1 = parseInt($('#children1').val()) || 0;
        let infants1 = parseInt($('#infants1').val()) || 0;
        let totalPassengers1 = adults1 + children1 + infants1;
        $('.choose-passenger-count1').text(totalPassengers1);
    }
    $('.pas-done-btn1').click(() => {
        pasWindow1.removeClass('show')
        updatePassengerCount1()
        updatePassingerWindow1()
    })

    // Treavellers and cabin class
    $('.travellersBtn1').click(function () {
        $('.cabinClassBtn1').removeClass('passenger-btns__btn_active')
        $(this).addClass('passenger-btns__btn_active')
        $(this).parent().parent('.passenger-window-header').next('.passenger-window-content').find('.travellers-counts1').show()
        $(this).parent().parent('.passenger-window-header').next('.passenger-window-content').find('.cabin-class1').hide()
    })
    $('.cabinClassBtn1').click(function () {
        $('.travellersBtn1').removeClass('passenger-btns__btn_active')
        $(this).addClass('passenger-btns__btn_active')
        $(this).parent().parent('.passenger-window-header').next('.passenger-window-content').find('.travellers-counts1').hide()
        $(this).parent().parent('.passenger-window-header').next('.passenger-window-content').find('.cabin-class1').show()
    })

    // Cabin class checked
    $('.cabin-class-checkbox1').on('change', function() {
        $('.cabin-class-checkbox1').not(this).prop('checked', false);
    });

    function updatePassingerWindow1 () {
        const travellersBtn1 = $('.travellersBtn1');
        const cabinClassBtn1 = $('.cabinClassBtn1');
        const travellersCounts1 = $('.travellers-counts1')
        const cabinClass1 = $('.cabin-class1')

        if (!travellersBtn1.hasClass('passenger-btns__btn_active')) {
            cabinClassBtn1.removeClass('passenger-btns__btn_active');
            travellersBtn1.addClass('passenger-btns__btn_active');
        }

        if (cabinClass1.css('display') === 'block') {
            cabinClass1.css('display', '');
            travellersCounts1.css('display', 'block');
        }
    }

// ------ Passenger two ------

    // Passenger btn click window function
    const choosePasBtn2 = $('.choose-pas-btn2'),
        pasWindow2 = $('.pas-window2')

    choosePasBtn2.click((e) => {
        e.stopPropagation()
        pasWindow2.toggleClass('show')
        updatePassingerWindow2()
    })

    pasWindow2.click((e) => {
        e.stopPropagation()
    })

    $(document.body).click(() => {
        pasWindow2.removeClass('show')
    })

    // Increment and decrement functions
    $('.increment-btn2').on('click', function() {
        const $inputField2 = $(this).siblings('.quantity-input2');
        let currentValue2 = parseInt($inputField2.val());
        $inputField2.val(currentValue2 + 1);
        updatePassengerCount2()
    });

    $('.decrement-btn2').on('click', function() {
        const $inputField2 = $(this).siblings('.quantity-input2');
        let currentValue2 = parseInt($inputField2.val());
        if ($inputField2.attr('id') === 'adults2' && currentValue2 > 1) {
            $inputField2.val(currentValue2 - 1);
        } else if ($inputField2.attr('id') !== 'adults2' && currentValue2 > 0) {
            $inputField2.val(currentValue2 - 1);
        }
        updatePassengerCount2()
    });
    function updatePassengerCount2() {
        let adults2 = parseInt($('#adults2').val()) || 0;
        let children2 = parseInt($('#children2').val()) || 0;
        let infants2 = parseInt($('#infants2').val()) || 0;
        let totalPassengers2 = adults2 + children2 + infants2;
        $('.choose-passenger-count2').text(totalPassengers2);
    }
    $('.pas-done-btn2').click(() => {
        pasWindow2.removeClass('show')
        updatePassengerCount2()
        updatePassingerWindow2()
    })

    // Treavellers and cabin class
    $('.travellersBtn2').click(function () {
        $('.cabinClassBtn2').removeClass('passenger-btns__btn_active')
        $(this).addClass('passenger-btns__btn_active')
        $(this).parent().parent('.passenger-window-header').next('.passenger-window-content').find('.travellers-counts2').show()
        $(this).parent().parent('.passenger-window-header').next('.passenger-window-content').find('.cabin-class2').hide()
    })
    $('.cabinClassBtn2').click(function () {
        $('.travellersBtn2').removeClass('passenger-btns__btn_active')
        $(this).addClass('passenger-btns__btn_active')
        $(this).parent().parent('.passenger-window-header').next('.passenger-window-content').find('.travellers-counts2').hide()
        $(this).parent().parent('.passenger-window-header').next('.passenger-window-content').find('.cabin-class2').show()
    })

    // Cabin class checked
    $('.cabin-class-checkbox2').on('change', function() {
        $('.cabin-class-checkbox2').not(this).prop('checked', false);
    });

    function updatePassingerWindow2 () {
        const travellersBtn2 = $('.travellersBtn2');
        const cabinClassBtn2 = $('.cabinClassBtn2');
        const travellersCounts2 = $('.travellers-counts2')
        const cabinClass2 = $('.cabin-class2')

        if (!travellersBtn2.hasClass('passenger-btns__btn_active')) {
            cabinClassBtn2.removeClass('passenger-btns__btn_active');
            travellersBtn2.addClass('passenger-btns__btn_active');
        }

        if (cabinClass2.css('display') === 'block') {
            cabinClass2.css('display', '');
            travellersCounts2.css('display', 'block');
        }
    }

// ------ Passenger three ------

    // Passenger btn click window function
    const choosePasBtn3 = $('.choose-pas-btn3'),
        pasWindow3 = $('.pas-window3')

    choosePasBtn3.click((e) => {
        e.stopPropagation()
        pasWindow3.toggleClass('show')
        updatePassingerWindow3()
    })

    pasWindow3.click((e) => {
        e.stopPropagation()
    })

    $(document.body).click(() => {
        pasWindow3.removeClass('show')
    })

    // Increment and decrement functions
    $('.increment-btn3').on('click', function() {
        const $inputField3 = $(this).siblings('.quantity-input3');
        let currentValue3 = parseInt($inputField3.val());
        $inputField3.val(currentValue3 + 1);
        updatePassengerCount3()
    });

    $('.decrement-btn3').on('click', function() {
        const $inputField3 = $(this).siblings('.quantity-input3');
        let currentValue3 = parseInt($inputField3.val());
        if ($inputField3.attr('id') === 'adults3' && currentValue3 > 1) {
            $inputField3.val(currentValue3 - 1);
        } else if ($inputField3.attr('id') !== 'adults3' && currentValue3 > 0) {
            $inputField3.val(currentValue3 - 1);
        }
        updatePassengerCount3()
    });
    function updatePassengerCount3() {
        let adults3 = parseInt($('#adults3').val()) || 0;
        let children3 = parseInt($('#children3').val()) || 0;
        let infants3 = parseInt($('#infants3').val()) || 0;
        let totalPassengers3 = adults3 + children3 + infants3;
        $('.choose-passenger-count3').text(totalPassengers3);
    }

    $('.pas-done-btn3').click(() => {
        pasWindow3.removeClass('show')
        updatePassengerCount3()
        updatePassingerWindow3()
    })

    // Treavellers and cabin class
    $('.travellersBtn3').click(function () {
        $('.cabinClassBtn3').removeClass('passenger-btns__btn_active')
        $(this).addClass('passenger-btns__btn_active')
        $(this).parent().parent('.passenger-window-header').next('.passenger-window-content').find('.travellers-counts3').show()
        $(this).parent().parent('.passenger-window-header').next('.passenger-window-content').find('.cabin-class3').hide()
    })
    $('.cabinClassBtn3').click(function () {
        $('.travellersBtn3').removeClass('passenger-btns__btn_active')
        $(this).addClass('passenger-btns__btn_active')
        $(this).parent().parent('.passenger-window-header').next('.passenger-window-content').find('.travellers-counts3').hide()
        $(this).parent().parent('.passenger-window-header').next('.passenger-window-content').find('.cabin-class3').show()
    })

    // Cabin class checked
    $('.cabin-class-checkbox3').on('change', function() {
        $('.cabin-class-checkbox3').not(this).prop('checked', false);
    });

    function updatePassingerWindow3 () {
        const travellersBtn3 = $('.travellersBtn3');
        const cabinClassBtn3 = $('.cabinClassBtn3');
        const travellersCounts3 = $('.travellers-counts3')
        const cabinClass3 = $('.cabin-class3')

        if (!travellersBtn3.hasClass('passenger-btns__btn_active')) {
            cabinClassBtn3.removeClass('passenger-btns__btn_active');
            travellersBtn3.addClass('passenger-btns__btn_active');
        }

        if (cabinClass3.css('display') === 'block') {
            cabinClass3.css('display', '');
            travellersCounts3.css('display', 'block');
        }
    }
})