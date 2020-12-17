@extends('layouts.base')

@section('app')
    <div id="overlay" class="overlay"></div>
    @include('components.header')
    <main>
        @include('components.sidebar')
        @yield('content')
    </main>
@endsection
