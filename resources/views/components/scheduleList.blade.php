<div class="schedule">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    {{-- Title --}}
    <i class='mb-3 fas fa-clock' style='font-size:18px;color:#fd367e'></i>
    <h5 class="subheader1" style="display: inline">Rental Schedule</h5>

    {{-- Card --}}
    {{--TODO: Change for to foreach of the schedule data--}}
    @for($i = 0 ; $i < 3; $i++)
        <div class="card mb-4 p-3"
             style="max-width: 100%; border-radius: 8px; border:none; box-shadow: 0 0px 8px 0 rgba(0, 0, 0, 0), 0 0px 20px 0 rgba(0, 0, 0, 0.19);">
            <div class="card-body row g-0">
                <div class="col-md-3 px-3 d-flex align-items-center" style="border-right:1px solid #a8a8a8">
                    <img src="{{asset('/assets/zoom-logo.png')}}" style="max-width: 100%" alt="zoom">
                </div>
                <div class="col my-auto d-flex justify-content-between">
                    <div class="px-3">
                        <p class="card-text body1 m-0">Date: 8 Oct 2020</p>
                        <p class="card-text body1 m-0">Participant Limit: 100</p>
                        <p class="card-text body1 m-0">Rental Start Time: 02.00 PM</p>
                    </div>
                    <div class="d-flex align-items-center">
                        <button type="button" style="background-color: #fd367e; border:none" class="subheader2 btn btn-primary">Open
                            Zoom
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endfor
</div>
