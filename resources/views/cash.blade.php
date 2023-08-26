<!doctype html>
<html lang="en">
<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
     <title>Cash On Delivery</title>
</head>
<body >
     <div class="container">
          <div class="row d-flex justify-content-center align-item-center">
               <div class="col-md-8 col-lg-7 col-sm-12">
                    {{-- Alert Secion --}}
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
                    <div class="card border-white">
                         <img src="assests/images/cash.png" alt="payment">
                    </div>
               </div>
               <div class=" col-md-5 col-lg-6 col-sm-12">
                    <form method="post" action='/login'>
                         @csrf
                         <div class="mb-3">
                         <label for="name" class="form-label text-dark">Enter Your Name</label>
                           <input type="text" class="form-control" value="{{old('name')}}" name="name" id="name" aria-describedby="nameHelp">
                           <span class="text-danger">
                              @error('name')
                                  {{$message}}
                              @enderror
                           </span>
                         </div>
                         <div class="mb-3">
                         <label for="address" class="form-label text-dark">Enter Your Address</label>
                           <input type="text" class="form-control" value="{{old('address')}}" name="address" id="address" aria-describedby="addressHelp">
                           <span class="text-danger">
                              @error('address')
                                  {{$message}}
                              @enderror
                           </span>
                         </div>
                         <div class="mb-3">
                         <label for="number" class="form-label text-dark">Enter Your Phone Number</label>
                           <input type="text" class="form-control" value="{{old('number')}}" name="number" id="number" aria-describedby="numberHelp">
                           <span class="text-danger">
                              @error('number')
                                  {{$message}}
                              @enderror
                           </span>
                         </div>
                         <div class="mb-3">
                         <label for="email" class="form-label text-dark">Enter Your  E-mail</label>
                           <input type="email" class="form-control" value="{{old('email')}}" name="email" id="email" aria-describedby="emailHelp">
                           <span class="text-danger">
                              {{-- @error('email')
                                  {{$message}}
                              @enderror --}}
                           </span>
                         </div>
                         <div class="mb-3">
                         <label for="city" class="form-label text-dark">Enter Your City Name</label>
                           <input type="text" class="form-control" value="{{old('city')}}" name="city" id="city" aria-describedby="cityHelp">
                           <span class="text-danger">
                              @error('city')
                                  {{$message}}
                              @enderror
                           </span>
                         </div>
                         <button type="disable" class="btn btn-danger ">Submit Now</button>
                       </form>
               </div>
          </div>
     </div>

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>