<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>

<body>
    <div class="container">
        {{-- Title --}}
        <i class='mb-3 fas fa-clock' style='font-size:18px;color:#fd367e'></i>
        <h5 class="" style="display: inline">Rental Schedule</h5>

        {{-- Card --}}
        <div class="card mb-3 p-3"
            style="max-width: 540px; border:none; box-shadow: 0 0px 8px 0 rgba(0, 0, 0, 0), 0 0px 20px 0 rgba(0, 0, 0, 0.19);">
            <div class="row g-0">
                <div class="col-md-3 px-3" style="border-right:1px solid #a8a8a8">
                    <img src="{{ asset('Img/Logo Ez Conference.png') }}" style="max-width: 100%" alt="zoom">
                </div>
                <div class="col-md-6 my-auto">
                    <div class="card-body px-3">
                        <p class="card-text  m-0">Date: 8 Oct 2020</p>
                        <p class="card-text  m-0">Participant Limit: 100</p>
                        <p class="card-text  m-0">Rental Start Time: 02.00 PM</p>
                    </div>
                </div>
                <div class="col-md-3 text-center my-auto">
                    <button type="button" style="background-color: #fd367e; border:none" class="btn btn-primary">Open
                        Zoom</button>
                </div>
            </div>
        </div>

        {{-- Card --}}
        <div class="card mb-3 p-3"
            style="max-width: 540px; border:none; box-shadow: 0 0px 8px 0 rgba(0, 0, 0, 0), 0 0px 20px 0 rgba(0, 0, 0, 0.19);">
            <div class="row g-0">
                <div class="col-md-3 px-3" style="border-right:1px solid #a8a8a8">
                    <img src="{{ asset('Img/Logo Ez Conference.png') }}" style="max-width: 100%" alt="zoom">
                </div>
                <div class="col-md-6 my-auto">
                    <div class="card-body px-3">
                        <p class="card-text  m-0">Date: 8 Oct 2020</p>
                        <p class="card-text  m-0">Participant Limit: 100</p>
                        <p class="card-text  m-0">Rental Start Time: 02.00 PM</p>
                    </div>
                </div>
                <div class="col-md-3 text-center my-auto">
                    <button type="button" style="background-color: #fd367e; border:none" class="btn btn-primary">Open
                        Zoom</button>
                </div>
            </div>
        </div>

        {{-- Card --}}
        <div class="card mb-3 p-3"
            style="max-width: 540px; border:none; box-shadow: 0 0px 8px 0 rgba(0, 0, 0, 0), 0 0px 20px 0 rgba(0, 0, 0, 0.19);">
            <div class="row g-0">
                <div class="col-md-3 px-3" style="border-right:1px solid #a8a8a8">
                    <img src="{{ asset('Img/Logo Ez Conference.png') }}" style="max-width: 100%" alt="zoom">
                </div>
                <div class="col-md-6 my-auto">
                    <div class="card-body px-3">
                        <p class="card-text  m-0">Date: 8 Oct 2020</p>
                        <p class="card-text  m-0">Participant Limit: 100</p>
                        <p class="card-text  m-0">Rental Start Time: 02.00 PM</p>
                    </div>
                </div>
                <div class="col-md-3 text-center my-auto">
                    <button type="button" style="background-color: #fd367e; border:none" class="btn btn-primary">Open
                        Zoom</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
