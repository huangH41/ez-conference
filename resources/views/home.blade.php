@extends('layouts.app')

@section('title')
    Overview
@endsection

@section('content')
    <div class="home">
        <div class="content container-fluid">
            @if(session()->has('success'))
                <div class="alert alert-success body1">{{session()->get('success')}}</div>
            @endif
            <div class="row mb-4">
                <div class="col-md-7 mb-3">
                    @include('components.calendar',['rents' => $rents])
                </div>
                <div class="col-md-5 mb-3">
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
