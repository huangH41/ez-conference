@extends('layouts.app')

@section('title')
  <p>Transaction</p>
@endsection

@section('content')
  <div class="home">
      <div class="content">
        <div class="row mb-4">
            <div class="col-md-5">
              @include('components.transaction-input')
            </div>
            <div class="col-md-7">
                @include('components.calendar')
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-md-5">
                
            </div>
        </div>
      </div>
  </div>
@endsection
