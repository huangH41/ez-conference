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
                <div class="transaction-price__container">
                  <div class="transaction-price__content">
                    <h1 class="subheader2">Rental Price</h1>
                    <h1 class="hero">30.000</h1>
                  </div>
                </div>
            </div>

            <div class="col-md-7">
              <button type="submit" class="button button--main">
                Create Rental Schedule
              </button>
            </div>
        </div>
      </div>
  </div>
@endsection