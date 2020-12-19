@extends('layouts.app')

@section('title')
    <p>Transaction History</p>
@endsection

@section('content')
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <div class="wrapper transaction">
        <div class="content container-fluid">
            <div class="container__table">
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
                                <td>{{ date('j M Y', strtotime($t->created_at))}}</td>
                                <td>{{ $t->zoom->participant .' participant(s)' }}</td>
                                <td>{{ date('j M Y', strtotime($t->date)) }}</td>
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
