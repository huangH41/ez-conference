$('.time-setter').ready(function () {
    let rentalStartTime = "09:00";
    $('#rental-start-time').val(rentalStartTime);

    $('#hour-input').slick({
        vertical: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        initialSlide: 9,
        prevArrow: $('#prev-hour'),
        nextArrow: $('#next-hour'),
        verticalSwiping: true,
    }).on('afterChange', function (event, slick, currentSlide, nextSlide) {
        const hour = currentSlide < 10 ? `0${currentSlide}` : String(currentSlide);
        rentalStartTime = rentalStartTime.replace(/[0-9][0-9]:/, `${hour}:`);
        $('#rental-start-time').val(rentalStartTime);
    });

    $('#minute-input').slick({
        vertical: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        prevArrow: $('#prev-minute'),
        nextArrow: $('#next-minute'),
        verticalSwiping: true,
    }).on('afterChange', function (event, slick, currentSlide, nextSlide) {
        const minute = (currentSlide * 10) < 10 ? `0${currentSlide}` : String(currentSlide * 10);
        rentalStartTime = rentalStartTime.replace(/:[0-9][0-9]/, `:${minute}`);
        $('#rental-start-time').val(rentalStartTime);
    });
});