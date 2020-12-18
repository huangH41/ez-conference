import {changePrice} from "./price";

$('.participant-limit').ready(function() {

    $('#participant-limit-input').slick({
        vertical: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        prevArrow: $('#prev-participant-limit'),
        nextArrow: $('#next-participant-limit'),
        verticalSwiping: true,
    }).on('afterChange', function (event, slick, currentSlide, nextSlide) {
        $('#participant-limit').val(
            $(slick.$slides.get(currentSlide)).find('.transaction-input__input-label').html()
        );
        changePrice();
    });

    // initialize participant limit value
    $('#participant-limit').val(
        $('#participant-limit-input').find('.slick-active .transaction-input__input-label').html()
    );
});

$('.rental-duration').ready(function() {

    $('#rental-duration-input').slick({
        vertical: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        prevArrow: $('#prev-rental-duration'),
        nextArrow: $('#next-rental-duration'),
        verticalSwiping: true,
    }).on('afterChange', function (event, slick, currentSlide, nextSlide) {
        $('#rental-duration').val(currentSlide + 1);
        changePrice();
    });

    // initialize participant limit value
    $('#rental-duration').val(1);
});
