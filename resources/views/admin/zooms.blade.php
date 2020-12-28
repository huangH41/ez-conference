@extends('layouts.app')

@section('title')
    Zoom Account List
@endsection

@section('content')
<div class="wrapper">
    <div class="content container-fluid">
        <a href="{{ route('addZoomView')}}" type="button" style="background-color: #fd367e; border:none"
            class="body2 btn btn-primary mt-3 mb-4">
            Add Account
        </a>
        @foreach($zooms as $zoom)
        <div class="card mb-4 container-fluid"
                 style="max-width: 100%; border-radius: 8px; border:none; box-shadow: 0 0px 8px 0 rgba(0, 0, 0, 0), 0 0px 20px 0 rgba(0, 0, 0, 0.19);">
                <div class="card-body row">
                    <div class="col container-fluid">
                        <div class="col row">
                            <div class="col-3 px-3 d-flex align-items-center" style="border-right:1px solid #a8a8a8">
                                <img src="{{asset('/assets/zoom-logo.png')}}" style="max-width: 100%" alt="zoom">
                            </div>
                            <div class="col my-auto d-flex justify-content-between">
                                <div class="px-3">
                                    <p class="card-text body1 m-0">Participant Limit: {{$zoom->participant}}</p>
                                    <p class="card-text body1 m-0">Price: {{$zoom->price}}</p>
                                    <p class="card-text body1 m-0">Zoom User ID: {{$zoom->zoom_user_id}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-5 py-2 button-container d-flex justify-content-end">
                        <div class="p-1">
                            <a href="{{ route('updateZoomView', $zoom->id)}}" type="button" style="background-color: #fd367e; border:none"
                                   class="body2 btn btn-primary">
                                Edit Account
                            </a>
                        </div>
                        <div class="p-1">
                            <form action="{{ route('deleteZoomAcc', $zoom->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="body2 btn btn-primary" style="background-color: #fd367e; border:none" type="submit">
                                    Delete Account
                                </button>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
