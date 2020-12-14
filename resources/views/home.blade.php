@extends('layouts.app')

@section('content')
    <div class="home">
        @include('components.sidebar')
        <div class="content">
            <div class="row mb-4">
                <div class="col-md-7">
                    @include('components.calendar')
                </div>
                <div class="col-md-5">
                    @include('components.counter')
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-7">
                    @include('components.scheduleList')
                </div>
            </div>
        </div>
    </div>
@endsection
