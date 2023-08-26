<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Hotel Management</title>
</head>
<body class="bg-danger">
    @if (Session::has('fail'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Hey Man!</strong> {{Session::get('fail')}}.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @elseif (Session::has('success'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Hey Man!</strong> {{Session::get('success')}}.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <h1 class="text-center text-light ">Welcome to my Project</h1>

    @if (Session::has('loginId'))
    <div class="container mt-3">
        <div class="row d-flex align-items-center justify-content-beetween space-between">
            <div class="col-md-6 ">
                <div class="card">
                    <img src='{{"storage/$data->image"}}' class="img-fluid w-100" alt="">
                    <h2 class="text-center text-dark">{{$data->name}}</h2>
                </div>
            </div>    
            <div class="col-md-6 ">
                <div class="card bg-dark">
                    <img src='{{"storage/$data->image"}}' class="img-fluid w-100 position-center" alt="">
                    <h2 class="text-center text-light">{{$data->name}}</h2>
                </div>
            </div>
        </div>      
    </div>
    @endif

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>