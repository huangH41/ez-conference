@extends('layouts.app')

@section('title')
    Insert Zoom Account
@endsection

@section('content')
<div class="wrapper">
    <div class="content container-fluid">
        <form action="{{route('addZoomAcc')}}" method="POST">
            @csrf
            <div class="form-group body2">
                <label for="participant">Participant</label>
                <input class="form-control form-control-lg" type="number" id="participant" name="participant" value="{{old('participant')}}">
            </div>
            <div class="form-group body2">
                <label for="price">Price</label>
                <input class="form-control form-control-lg" type="number" id="price" name="price" value="{{old('price')}}">
            </div>
            <div class="form-group body2">
                <label for="zoomUserId">Zoom User ID</label>
                <input class="form-control form-control-lg" type="text" id="zoomUserId" name="zoomUserId" value="{{old('zoomUserId')}}">
            </div>
            <button type="submit" style="background-color: #fd367e; border:none" class="body2 btn btn-primary mt-3 mb-4">Add Zoom Account</button>
        </form>
    </div>
</div>
@endsection
