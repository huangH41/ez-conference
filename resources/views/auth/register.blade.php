@extends('layouts.app')

@section('link__css')
    <link rel="stylesheet" href={{ asset('css/style.css') }}>
@endsection

@section('content')
<div class="container__form">
    <div class="element">
        <div class="element__left">
            <h2>Ez</h2>
            <h2>Conference</h2>
            <div class="left__desc">
            <p>
                Welcome to Ez-Conference. we are here to help your problem with
                Conference
            </p>
        </div>
    </div>
    <div class="element__right">
        <h1>{{ __('Register') }}</h1>
        <div class="form__box">
            <form method="POST" action="{{ route('register') }}">
                @csrf
            
                <div class="form-group row">
                    <div class="col-md-11">
                        <input id="name" placeholder="Name" type="text" class="input__key form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
            
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            
                <div class="form-group row">
                    <div class="col-md-11">
                        <input placeholder="E-Mail" id="email" type="email" class="input__key form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            
                <div class="form-group row">
                    <div class="col-md-11">
                        <input placeholder="Password" id="password" type="password" class="input__key form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            
                <div class="form-group row">
                    <div class="col-md-11">
                        <input placeholder="Confirm Password" id="password-confirm" type="password" class="input__key form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>
            
                <div>
                    <div>
                        <button type="submit">
                            {{ __('Register') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
      </div>
    </div>
</div>
@endsection
