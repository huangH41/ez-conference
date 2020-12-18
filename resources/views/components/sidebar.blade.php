<div id="sidebar" class="sidebar">
    <div class="sidebar-icon @if(\Illuminate\Support\Facades\Route::getCurrentRoute()->getName() == 'home') active @endif">
        <a class="sidebar-icon-container" href="{{route('home')}}">
            <img src="/assets/icons/home.svg" alt="Home Icon">
        </a>
    </div>
    <div class="sidebar-icon @if(\Illuminate\Support\Facades\Route::getCurrentRoute()->getName() == 'rent') active @endif">
        <a class="sidebar-icon-container" href="{{route('rent')}}">
            <img src="/assets/icons/rent.svg" alt="Home Icon">
        </a>
    </div>
</div>
