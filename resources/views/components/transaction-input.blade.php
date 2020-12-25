<div class="transaction-input__container">
    @include('components.transaction-inputs.time-setter')

    <div class="row mt-4 w-100">

        {{-- Participan Limit --}}
        <div class="col-md-6 pr-md-0">
            <div class="participant-limit invisible">
                <h1 class="subheader2">Participant Limit</h1>
                <div class="participant-limit__container">
                    <div class="transaction-input__input-group">
                        <div class="transaction-input__input-control" id="next-participant-limit">
                            <img class="arrow arrow__vertical--regular" src="/assets/icons/arrow-up.svg" alt="Top">
                        </div>

                        <div class="participant-limit__slider">
                            <div id="participant-limit-input">
                                @foreach($zooms as $zoom)
                                    <div class="transaction-input__input-label hero">{{$zoom->participant}}</div>
                                @endforeach
                            </div>
                        </div>

                        <div class="transaction-input__input-control" id="prev-participant-limit">
                            <img class="arrow arrow__vertical--regular" src="/assets/icons/arrow-down.svg" alt="Top">
                        </div>
                    </div>
                </div>

                <input name="participantLimit" id="participant-limit" type="number" class="d-none">
            </div>
        </div>

        <div class="col-md-6 pl-md-0">
            {{-- Rental Duration --}}
            <div class="rental-duration invisible">
                <h1 class="subheader2">Rental Duration</h1>
                <div class="rental-duration__container">
                    <div class="transaction-input__input-group">
                        <div class="transaction-input__input-control" id="next-rental-duration">
                            <img class="arrow arrow__vertical--regular" src="/assets/icons/arrow-up.svg" alt="Top">
                        </div>

                        <div class="rental-duration__slider">
                            <div id="rental-duration-input">
                                <div class="transaction-input__input-label hero">01</div>
                                <div class="transaction-input__input-label hero">02</div>
                                <div class="transaction-input__input-label hero">03</div>
                                <div class="transaction-input__input-label hero">04</div>
                                <div class="transaction-input__input-label hero">05</div>
                                <div class="transaction-input__input-label hero">06</div>
                                <div class="transaction-input__input-label hero">07</div>
                                <div class="transaction-input__input-label hero">08</div>
                                <div class="transaction-input__input-label hero">09</div>
                                <div class="transaction-input__input-label hero">10</div>
                                <div class="transaction-input__input-label hero">11</div>
                                <div class="transaction-input__input-label hero">12</div>
                                <div class="transaction-input__input-label hero">13</div>
                                <div class="transaction-input__input-label hero">14</div>
                                <div class="transaction-input__input-label hero">15</div>
                                <div class="transaction-input__input-label hero">16</div>
                                <div class="transaction-input__input-label hero">17</div>
                                <div class="transaction-input__input-label hero">18</div>
                                <div class="transaction-input__input-label hero">19</div>
                                <div class="transaction-input__input-label hero">20</div>
                                <div class="transaction-input__input-label hero">21</div>
                                <div class="transaction-input__input-label hero">22</div>
                                <div class="transaction-input__input-label hero">23</div>
                                <div class="transaction-input__input-label hero">24</div>
                            </div>
                        </div>

                        <div class="transaction-input__input-control" id="prev-rental-duration">
                            <img class="arrow arrow__vertical--regular" src="/assets/icons/arrow-down.svg" alt="Top">
                        </div>
                    </div>
                </div>

                <input name="rentalDuration" id="rental-duration" type="number" class="d-none">
            </div>
        </div>

    </div>
</div>
