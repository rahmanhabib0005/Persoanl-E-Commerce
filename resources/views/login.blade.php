<!doctype html>
<html lang="en">
<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
     <title>Login Form</title>
</head>
<body class="bg-dark">
     <div class="container">
          <div class="row d-flex justify-content-center align-item-center">
               <div class=" col-md-6 col-lg-6 col-sm-12">
                    <h1 class="text-center text-danger my-2">Login Form</h1>
                    <form method="post" action='/login'>
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
                         @csrf
                         <div class="mb-3">
                         <label for="name" class="form-label text-light">Email Address</label>
                           <input type="email" class="form-control" value="{{old('email')}}" name="email" id="email" aria-describedby="emailHelp">
                           <span class="text-danger">
                              @error('email')
                                  {{$message}}
                              @enderror
                           </span>
                         </div>
                         <div class="mb-3">
                              <label for="name" class="form-label text-light">Password</label>
                              <input type="password" class="form-control" name="password" id="password">
                              <span class="text-danger">
                                   @error('password')
                                       {{$message}}
                                   @enderror
                              </span>
                         </div>
                         <button type="submit" class="btn btn-primary">Submit</button>
                       </form>
               </div>
          </div>
          <div class="row d-flex justify-content-center align-item-center">
               <div class=" col-md-6 col-lg-6 col-sm-12 mx-5 my-5 d-flex align-item-between my-2">
                    <p class="text-light">If you don't have any account here then you can Click here?</p>
                    <a href={{ url('/signup') }} class="fw-bold text-decoration-none text-warning mx-2">Signup</a>
               </div>
          </div>
     </div>

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>