<!doctype html>
<html lang="en">
<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
     <title>Discounted Product</title>
</head>
<body>
     <div class="container">
          <div class="card mb-3 w-full" style="max-height: 650px;">
               <div class="row g-0">
                 <div class="col-md-4">
                   <img src={{"storage/$data->product"}} class="img-fluid rounded-start" alt="{{$data->product}}">
                 </div>
                 <div class="col-md-8">
                   <div class="card-body">
                     <h5 class="card-title">{{$data->pname}}</h5>
                     <p class="card-text">Price: <span class="fw-bold fs-4"><b>
                      ৳</b></span>420</p>
                      <div class="col md-3">
                        <a href={{url("/bkash")}}><img  class="img-fluid" src="assests/images/bkash.png" alt="image" width="150px" height="50px"></a>
                        <a href="{{url('/nagad')}}"><img  class="img-fluid" src="assests/images/nagad.png" alt="image" width="150px" height="70px"></a>
                      </div>
                        <a href="{{url('/cash')}}"><img class="mt-4 img-fluid" src="assests/images/images.jpg" alt="image" width="250px" height="170px"></a>
                   </div>
                 </div>
               </div>
             </div>
     </div>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>