@extends('layouts.base')

@section('app')
    @include('components.header')
    <main>
        @include('components.sidebar')
        @yield('content')
    </main>
@endsection
