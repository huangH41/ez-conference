@extends('layouts.app')

@section('title')
    Transaction
@endsection

@section('content')
    <div class="wrapper rent">
        <div class="content container-fluid">
            <form method="post" action="{{route('createRent')}}">
                @csrf
                <div class="row">
                    <div class="col-md-5 mb-4 input-col">
                        @include('components.transaction-input',['zooms' => $zooms])
                    </div>
                    <div class="col-md-7 mb-4">
                        @include('components.calendar')
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-md-5 mb-4">
                        <div class="transaction-price__container">
                            <div class="transaction-price__content">
                                <h1 class="subheader2">Rental Price</h1>
                                <h1 id="rent-price" class="hero">5.000</h1>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-7">
                        <button type="button" class="button button--main" data-toggle="modal" data-target="#staticBackdrop">
                            Create Rental Schedule
                        </button>
                    </div>
                    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title subheader2" id="staticBackdropLabel">Payment</h5>
                                </div>
                                <div class="modal-body">
                                    <p class="body2">
                                        Payment Dummy
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="button btn-secondary" data-dismiss="modal">Cancel</button>
                                    <input type="submit" class="button button--main" value="Pay"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
