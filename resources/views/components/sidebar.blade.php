<div id="sidebar" class="sidebar">
    @if(Auth::user()->role == 'user')
    <div class="sidebar-icon @if(\Illuminate\Support\Facades\Route::getCurrentRoute()->getName() == 'home') active @endif">
        <a class="sidebar-icon-container" href="{{route('home')}}">
            <img src="/assets/icons/home.svg" alt="Home Icon">
        </a>
    </div>
    @endif
    <div class="sidebar-icon @if(\Illuminate\Support\Facades\Route::getCurrentRoute()->getName() == 'rent' or
        \Illuminate\Support\Facades\Route::getCurrentRoute()->getName() == 'zoomIndex') active @endif">
        <a class="sidebar-icon-container" href="@if(Auth::user()->role == 'admin') {{route('zoomIndex')}} @else {{route('rent')}} @endif">
            <img src="/assets/icons/rent.svg" alt="Rent Icon">
        </a>
    </div>
</div>
