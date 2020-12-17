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
    <p>Transaction History</p>
@endsection

@section('content')
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <div class="home">
        <div class="content">

            {{-- <div class="container__input m-3 mb-5 mx-auto">
                <form action="/transaction" method="GET" class="d-flex" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="search" name="search" placeholder="Search Transaction" class="form-control mr-2" 
                        style="font-size: 18px; border-radius: 10px; padding: 25px;">
                    <button type="submit" class="btn" 
                            style="font-size: 16px; background-color:#f66d9b; color: white; border-radius: 10px; font-weight: bolder;">
                                Search
                    </button>
                </form>
            </div> --}}
            
            <div class="container__table m-5">
                <table class="table table-hover mt-5" style="font-size: 14px; max-width: 100%;">
                    <thead class="" style="background: #9561e2; color: white;">
                        <tr>
                            <th>Date</th>
                            <th>Limit Participants</th>
                            <th>Schedule Date</th>
                            <th>Schedule Time</th>
                            <th>Duration</th>
                            <th>Total Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($transactions as $t)
                            <tr>
                                <td>{{ $t->created_at->format('j M Y') }}</td>
                                <td>{{ $t->zoom->participant .' participant(s)' }}</td>
                                <td>{{ date('h:i A', strtotime($t->date)) }}</td>
                                <td>{{ $t->time }}</td>
                                <td>{{ $t->duration .' hour(s)' }}</td>
                                <td>{{ 'Rp. '. $t->zoom->price * $t->duration .'.00' }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $transactions->links() }}
            </div>
        </div>
    </div>
@endsection
