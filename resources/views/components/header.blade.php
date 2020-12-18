<div class="header">
    <img id="hamburger" role="button" src="{{asset('/assets/icons/hamburger.svg')}}" class="header-hamburger mx-3" />
    <img src="/assets/logo.png" alt="logo" class="logo">
    <div class="header-title">
        <img class="header-icon" src="/assets/icons/home-accent.svg" alt="Home Accent Icon">
        <div class="header1 header-title-text">
            @yield('title')
        </div>
    </div>
    @auth
        <div role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="profile">
                <div class="body2 profile-name">
                    Hello! {{ Auth::user()->username }}
                </div>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <div class="dropdown-item-text body1">
                        <div class="d-flex align-items-center">
                            <img src="/assets/images/profile-picture.png"
                                 class="profile-picture profile-picture-detail"/>
                            <div class="container-fluid">
                                <strong class="body1">{{ Auth::user()->username }}</strong>
                                <div>{{ Auth::user()->email }}</div>
                            </div>
                        </div>
                    </div>
                    <hr/>
                    <a class="dropdown-item body1" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
                <img src="/assets/images/profile-picture.png" class="profile-picture"/>
            </div>
        </div>
    @endauth
</div>
