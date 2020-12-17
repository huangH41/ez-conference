<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="/css/app.css">
    <title>Document</title>
</head>

<body>
    <div class="time-setter">
        <h1 class="subheader2">Rental Start Time</h1>
        <div class="time-setter__container">
            <div class="time-setter__input-group">
                <div class="time-setter__input-control" id="next-hour">
                    <img class="arrow arrow__vertical--regular" src="/assets/icons/arrow-up.svg" alt="Top">
                </div>

                <div class="time-setter__slider">
                    <div id="hour-input">
                        <div class="time-setter__input-label hero">00</div>
                        <div class="time-setter__input-label hero">01</div>
                        <div class="time-setter__input-label hero">02</div>
                        <div class="time-setter__input-label hero">03</div>
                        <div class="time-setter__input-label hero">04</div>
                        <div class="time-setter__input-label hero">05</div>
                        <div class="time-setter__input-label hero">06</div>
                        <div class="time-setter__input-label hero">07</div>
                        <div class="time-setter__input-label hero">08</div>
                        <div class="time-setter__input-label hero">09</div>
                        <div class="time-setter__input-label hero">10</div>
                        <div class="time-setter__input-label hero">11</div>
                        <div class="time-setter__input-label hero">12</div>
                        <div class="time-setter__input-label hero">13</div>
                        <div class="time-setter__input-label hero">14</div>
                        <div class="time-setter__input-label hero">15</div>
                        <div class="time-setter__input-label hero">16</div>
                        <div class="time-setter__input-label hero">17</div>
                        <div class="time-setter__input-label hero">18</div>
                        <div class="time-setter__input-label hero">19</div>
                        <div class="time-setter__input-label hero">20</div>
                        <div class="time-setter__input-label hero">21</div>
                        <div class="time-setter__input-label hero">22</div>
                        <div class="time-setter__input-label hero">23</div>
                    </div>
                </div>

                <div class="time-setter__input-control" id="prev-hour">
                    <img class="arrow arrow__vertical--regular" src="/assets/icons/arrow-down.svg" alt="Top">
                </div>
            </div>

            <div class="time-setter__input-group">
                <div class="time-setter__input-control" id="next-minute">
                    <img class="arrow arrow__vertical--regular" src="/assets/icons/arrow-up.svg" alt="Top">
                </div>

                <div class="time-setter__slider">
                    <div id="minute-input">
                        <div class="time-setter__input-label hero">00</div>
                        <div class="time-setter__input-label hero">10</div>
                        <div class="time-setter__input-label hero">20</div>
                        <div class="time-setter__input-label hero">30</div>
                        <div class="time-setter__input-label hero">40</div>
                        <div class="time-setter__input-label hero">50</div>
                    </div>
                </div>

                <div class="time-setter__input-control" id="prev-minute">
                    <img class="arrow arrow__vertical--regular" src="/assets/icons/arrow-down.svg" alt="Top">
                </div>
            </div>
        </div>
    </div>

    <input name="rentalStartTime" id="rental-start-time" type="time" class="d-none">
</body>

<script src="/js/app.js"></script>
<script>
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

</script>

</html>
