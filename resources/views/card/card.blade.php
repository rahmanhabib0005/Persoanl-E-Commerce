<!doctype html>
<html lang="en">

<head>
  <title>Card</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
     <div class="container">
          <div class="row text-center">
               <div class="col-sm-8">
                    <h1 class="text-center">Card List</h1>
                    @forelse ($data as $item)
                    <div class="card bg-dark mb-2">
                         <div class="product-list my-3">
                              <div class="product-name d-flex align-items-center justify-content-evenly">
                                  <div><h3 class="text-capitalize text-light text-center">{{$item->cardTitle}}</h3></div>
                                  <div><p class="mb-0 amount text-light">৳{{$item->amount}}.00 </p></div>
                                  <input type="hidden" class="tk" value="{{$item->amount}}">
                                  <div>
                                       <a class="btn btn-primary text-uppercase px-3 py-1 mx-5 rounded-3" href="">Buy</a>
                                       <a class="btn btn-danger text-uppercase px-3 py-1 mx-5 rounded-3" href="{{url($item->id.'/deleteCard')}}">Delete</a>
                                  </div>
                              </div>
                        </div>
                    </div>
                    @empty
                         <h1>No Cards Found</h1>
                    @endforelse
                    <div class="fw-bold">Total ৳</div>
              </div>
          </div>
     </div>

  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>

  <script>
     console.log(document.getElementById("text").innerText)
  </script>
</body>

</html>