<!doctype html>
<html lang="en">
<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
     <title>Product Upload Form</title>
</head>
<body class="bg-dark">
     <div class="container">
          <div class="row d-flex justify-content-center align-item-center">
               <div class=" col-md-6 col-lg-6 col-sm-12">
                    <h1 class="text-center text-danger my-3">Add a Product</h1>
                    <form method="post" action='{{url('/product')}}' enctype="multipart/form-data">
                         @if (Session::has('fail'))
                              <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                   <strong>Hey Man!</strong> {{Session::get('fail')}}.
                                   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                              </div>
                         @endif
                         @csrf
                         <div class="mb-3">
                           <label for="name" class="form-label text-light">Product Name</label>
                           <input type="text" class="form-control" name="name" value="{{old('name')}}" id="name" aria-describedby="emailHelp">
                           <span class="text-danger">
                              @error('name')
                                  {{$message}}
                              @enderror
                           </span>
                         </div>
                         <div class="mb-3">
                           <label for="amount" class="form-label text-light">Amount</label>
                           <input type="text" class="form-control" name="amount" value="{{old('amount')}}" id="amount" aria-describedby="emailHelp">
                           <span class="text-danger">
                              @error('amount')
                                  {{$message}}
                              @enderror
                           </span>
                         </div>
                         <div class="mb-3">
                           <label for="category" class="form-label text-light">Category Name</label>
                           <input type="text" class="form-control" name="category" value="{{old('category')}}" id="category" aria-describedby="emailHelp">
                           <span class="text-danger">
                              @error('category')
                                  {{$message}}
                              @enderror
                           </span>
                         </div>
                         <div class="mb-3">
                           <label for="description" class="form-label text-light">Product Description</label>
                           <input type="text" class="form-control" name="description" value="{{old('description')}}" id="description" aria-describedby="emailHelp">
                           <span class="text-danger">
                              @error('description')
                                  {{$message}}
                              @enderror
                           </span>
                         </div>
                         <div class="mb-3">
                              <label for="image" class="form-label text-light">Upload Your Product</label>
                              <input class="form-control" name="image" type="file" id="image" multiple>
                                <span class="text-danger fs-6">
                                  @error('image')
                                  {{$message}}
                                  @enderror
                                </span>
                         </div>
                         <div class="mb-3">
                              <label for="red" class="form-label text-light">Upload Your Product Red Color (if available)</label>
                              <input class="form-control" name="red" type="file" id="red" multiple>
                                <span class="text-danger fs-6">
                                  @error('red')
                                  {{$message}}
                                  @enderror
                                </span>
                         </div>
                         <div class="mb-3">
                              <label for="blue" class="form-label text-light">Upload Your Product Blue Color (if available)</label>
                              <input class="form-control" name="blue" type="file" id="blue" multiple>
                                <span class="text-danger fs-6">
                                  @error('blue')
                                  {{$message}}
                                  @enderror
                                </span>
                         </div>
                         <div class="mb-3">
                              <label for="black" class="form-label text-light">Upload Your Product Black Color (if available)</label>
                              <input class="form-control" name="black" type="file" id="black" multiple>
                                <span class="text-danger fs-6">
                                  @error('black')
                                  {{$message}}
                                  @enderror
                                </span>
                         </div>
                         <div class="mb-3">
                              <label for="white" class="form-label text-light">Upload Your Product white Color (if available)</label>
                              <input class="form-control" name="white" type="file" id="white" multiple>
                                <span class="text-danger fs-6">
                                  @error('white')
                                  {{$message}}
                                  @enderror
                                </span>
                         </div>
                         <button type="submit" class="btn btn-primary">Submit</button>
                       </form>
               </div>
          </div>
     </div>

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>