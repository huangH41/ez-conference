@extends('layouts.app')

@section('title')
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
            
            <div class="container__table">
                <table class="table table-hover m-3 mt-5" style="font-size: 20px; max-width: 100%;">
                    <thead>
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