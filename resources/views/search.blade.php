<!DOCTYPE html>
<html lang="en">
<head>
      <title>Search</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!--FAVICON-->
      <link rel="icon" type="png/img" href="#">

      <!--Bootstrap 5 cdn links-->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

      <!--Link Swiper's css-->
      <link rel="stylesheet" href="https://unpkg.com/swiper@8.4.7/swiper-bundle.min.css">

      <!--Custom File's Link-->
      <link rel="stylesheet" href="assests/css/style.css">
      <link rel="stylesheet" href="assests/css/responsive-style.css">
      <link rel="stylesheet" href="assests/themify-icons/themify-icons.css">

  
  
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar">
<!---Navigation Section-->
<section id="header">
      <nav class="navbar navbar-expand-lg bg-white fixed-top">
            <div class="container">
                  <img src="assests/images/logo.png" class="img-fluid">
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="ti-align-justify navbar-toggler-icon"></span>
                  </button>
                    <div class="col-lg-10 col-md-6 col-sm-6">
                         <form class="d-flex justify-content-beetween align item center">
                              <input class="form-control" list="datalistOptions" id="exampleDataList" name="search" placeholder="Type to search...">
                              <button class="btn-primary px-4 mx-2">Search</button>
                              <a href="{{url('/search')}}" class="btn-danger mx-2">Reset</a>
                              <a class="btn-danger mx-2" href="{{url('/')}}">Back</a>
                    </form>
                    </div>
            </div>
      </nav>
</section>

<section id="products2" class="products">
      <div class="container">
            <div class="row">
                  <div class="col-sm-12">
                        <div class="headline text-center mb-5">
                              <h2 class="pb-3 position-relative d-inline-block">Search Product's</h2>
                        </div>
                  </div>
            </div>
            <div class="row">
                  @foreach ($blaizers as $item)
                  <div class="col-sm-6 col-lg-4">
                              <div class="product-list my-3">
                                    <div class="product-img position-relative">
                                          <span class="sale">For Sale</span>
                                          <img src={{"storage/$item->product"}} class="img-fluid product-image-first" alt="products">
                                    </div>
                                    <div class="product-name pt-3">
                                          <h3 class="text-capitalize text-center">{{$item->pname}}</h3>
                                          <p class="mb-0 amount text-center">৳{{$item->amount}}.00 </p>
                                          @if ($admin == $a_id)
                                                <a class="btn btn-primary text-uppercase px-3 py-1 mx-5 rounded-3" href="{{url("$item->product_id/edit")}}">Edit</a>
                                                <a class="btn btn-danger text-uppercase px-3 py-1 mx-5 rounded-3" href="{{url("$item->product_id/delete")}}">Delete</a>
                                          @else
                                                <a class="btn btn-danger text-uppercase px-3 py-1 text-center text-light rounded-3" href="{{url('storage/'.$item->product_id)}}">BUY Now</a>
                                          @endif
                                   </div>
                         </div>
                  </div>
                  @endforeach
            </div>
      </div>
</section>

 





    
<!-- Scroll Backt To Top -->
<div id="scrollup" title="Scroll To Top">
      <a href="#home"><span class="ti-arrow-up fs-4 text-white"></span></a>
</div>


            <!--Bootstrap 5 JS CDN Links-->
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"></script>

            <!--Swiper JS-->
            <script src="https://unpkg.com/swiper@8.4.7/swiper-bundle.min.js"></script>

            <!--Custom JS Link-->
            <script src="assests/js/main.js"></script>

      </body>
</html>
