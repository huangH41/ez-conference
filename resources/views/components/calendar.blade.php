<div class="calendar">
    <div class="calendar__header">
        <img src="/assets/icons/arrow-left.svg" alt="Left Arrow" id="cal-left-arr" class="calendar__arrow">
        <h1 class="header1"></h1>
        <img src="/assets/icons/arrow-right.svg" alt="Right Arrow" id="cal-right-arr" class="calendar__arrow">
    </div>
    <div class="calendar__body">
        <div class="calendar__weekdays">
            <div class="subheader2">Sun</div>
            <div class="subheader2">Mon</div>
            <div class="subheader2">Tue</div>
            <div class="subheader2">Wed</div>
            <div class="subheader2">Thu</div>
            <div class="subheader2">Fri</div>
            <div class="subheader2">Sat</div>
        </div>
        <div class="calendar__days">
            @for($i =0 ; $i < 35 ; $i++)
                <div class="spinner-grow calendar__day--loading">
                    <span class="sr-only">Loading...</span>
                </div>
            @endfor
        </div>

        <input class="d-none" type="date" name="rentalDate" id="rentalDate" value="">
    </div>
</div>
