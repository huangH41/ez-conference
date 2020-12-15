@extends('layouts.base')

@section('link__css')
    <link rel="stylesheet" href={{ asset('css/style.css') }}>
@endsection

@section('app')
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
      <h1>{{ __('Login') }}</h1>
      <div class="form__box">
        <form method="POST" action="{{ route('login') }}">
          @csrf
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

          <div>
            <div>
                <div>
                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>
            </div>
          </div>

          <div>
            <div>
                <button type="submit">
                    {{ __('Login') }}
                </button>

                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
            </div>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>
@endsection
