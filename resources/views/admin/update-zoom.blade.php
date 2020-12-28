@extends('layouts.app')

@section('title')
    Update Zoom Account
@endsection

@section('content')
<div class="wrapper">
    <div class="content container-fluid">
        <form action="{{route('updateZoomAcc', $zoom->id)}}" method="POST">
            @method('PUT')
            @csrf
            <div class="form-group body2">
                <label for="participant">Participant</label>
                <input class="form-control form-control-lg" type="number" id="participant" name="participant"
                    value="{{old('participant') != null ? old('participant') : $zoom->participant}}">
            </div>
            <div class="form-group body2">
                <label for="price">Price</label>
                <input class="form-control form-control-lg" type="number" id="price" name="price"
                    value="{{old('price') != null ? old('price') : $zoom->price}}">
            </div>
            <div class="form-group body2">
                <label for="zoomUserId">Zoom User Id</label>
                <input class="form-control form-control-lg" type="text" id="zoomUserId" name="zoomUserId"
                    value="{{old('zoomUserId') != null ? old('zoomUserId') : $zoom->zoom_user_id}}">
            </div>
            <button type="submit" style="background-color: #fd367e; border:none" class="body2 btn btn-primary mt-3 mb-4">Update Zoom Account</button>
        </form>
    </div>
</div>
@endsection
