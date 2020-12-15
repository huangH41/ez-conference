@extends('layouts.app')

@section('title')
    Overview
@endsection

@section('content')
    <div class="home">
        <div class="content">
            <div class="row mb-4">
                <div class="col-md-7">
                    @include('components.calendar',['rents' => $rents])
                </div>
                <div class="col-md-5">
                    @include('components.counter',['rentsCount' => $rentsCount])
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-7">
                    @include('components.scheduleList',['rents' => $rents])
                </div>
            </div>
        </div>
    </div>
@endsection
