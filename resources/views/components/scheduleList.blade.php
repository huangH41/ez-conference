<div class="schedule">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    {{-- Title --}}
    <i class='mb-3 fas fa-clock' style='font-size:18px;color:#fd367e'></i>
    <h5 class="subheader1" style="display: inline">Rental Schedule</h5>

    {{-- Card --}}
    @foreach($rents as $rent)
        <div class="card mb-4"
             style="max-width: 100%; border-radius: 8px; border:none; box-shadow: 0 0px 8px 0 rgba(0, 0, 0, 0), 0 0px 20px 0 rgba(0, 0, 0, 0.19);">
            <div class="card-body row p-4">
                <div class="col-3 px-3 d-flex align-items-center" style="border-right:1px solid #a8a8a8">
                    <img src="{{asset('/assets/zoom-logo.png')}}" style="max-width: 100%" alt="zoom">
                </div>
                <div class="col my-auto d-flex justify-content-between">
                    <div class="px-3">
                        <p class="card-text body1 m-0">Date: {{date('l j M Y', strtotime($rent->date))}}</p>
                        <p class="card-text body1 m-0">Participant Limit: 100</p>
                        <p class="card-text body1 m-0">Rental Start Time: {{date('h:i A',strtotime($rent->time))}}</p>
                    </div>
                </div>
                @if($rent->join_link != null && $rent->start_link != null)
                <div class="col py-2 d-flex align-items-center justify-content-center">
                    @if($rent->join_link != null && $rent->start_link != null)
                        <div class="p-1">
                            <a href="{{$rent->start_link}}" type="button" style="background-color: #fd367e; border:none"
                               class="body2 btn btn-primary" target="_blank">
                                Host Link
                            </a>
                        </div>
                        <div class="p-1">
                            <a href="{{$rent->join_link}}" type="button" style="background-color: #fd367e; border:none"
                               class="body2 btn btn-primary" target="_blank">
                                Guest Link
                            </a>
                        </div>
                    @elseif(date('j M Y',strtotime($rent->date)) == date('j M Y',time()))
                    <a href="{{route('createZoom',$rent->id)}}" type="button"
                       style="background-color: #fd367e; border:none" class="body2 btn btn-primary">
                        Create Meetings
                    </a>
                    @endif
            </div>
            @endif
        </div>
</div>
@endforeach
</div>
