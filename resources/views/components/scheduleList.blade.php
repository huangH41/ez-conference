<div class="schedule">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    {{-- Title --}}
    <i class='mb-3 fas fa-clock' style='font-size:18px;color:#fd367e'></i>
    <h5 class="subheader1" style="display: inline">Rental Schedule</h5>

    {{-- Card --}}
    {{--TODO: Change for to foreach of the schedule data--}}
    @for($i = 0 ; $i < 3; $i++)
        <div class="card mb-3 p-3"
             style="max-width: 540px; border:none; box-shadow: 0 0px 8px 0 rgba(0, 0, 0, 0), 0 0px 20px 0 rgba(0, 0, 0, 0.19);">
            <div class="row g-0">
                <div class="col-md-3 px-3" style="border-right:1px solid #a8a8a8">
                    <img src="/assets/logo.png" style="max-width: 100%" alt="zoom">
                </div>
                <div class="col-md-6 my-auto">
                    <div class="card-body px-3">
                        <p class="card-text body1  m-0">Date: 8 Oct 2020</p>
                        <p class="card-text body1  m-0">Participant Limit: 100</p>
                        <p class="card-text body1  m-0">Rental Start Time: 02.00 PM</p>
                    </div>
                </div>
                <div class="col-md-3 text-center my-auto">
                    <button type="button" style="background-color: #fd367e; border:none" class="subheader2 btn btn-primary">Open
                        Zoom
                    </button>
                </div>
            </div>
        </div>
    @endfor
</div>
