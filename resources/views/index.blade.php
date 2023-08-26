<!DOCTYPE html>
<html lang="en">
<head>
      <title>E-Commerce Website</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!--FAVICON-->
      <link rel="icon" type="png/img" href="assests/images/logo.png">

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
                  <div class="collapse-show navbar-collapse " id="navbarNavAltMarkup">
                        <div class="navbar-nav ms-auto">
                              <a class="nav-link active" aria-current="page" href="#home">Home</a>
                              <a class="nav-link" href="#special">Special</a>
                              <a class="nav-link" href="#testimonial">Reviews</a>
                              @if ($admin == $a_id)
                                    <a class="nav-link" href="{{url('/product')}}">Add Product</a>
                              @endif
                              <a class="nav-link" href="{{url('/search')}}"><img src="assests/images/search.png" width="20px" alt=""></a>
                              <a class="nav-link" href="{{url('/logout')}}">Logout</a>
                              <div class="dropdown">
                                    <a class="nav-link border-light dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                      Categorys
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                      <li><a class="dropdown-item text-center" href="#products1">T-Shirt's</a></li>
                                      <li><a class="dropdown-item text-center" href="#products2">{{$name}}'s</a></li>
                                      <li><a class="dropdown-item text-center" href="#products3">{{$watch}}'s</a></li>
                                    </ul>
                              </div>
                        </div>
                  </div>
            </div>
      </nav>
</section>

<!--- Home Section-->
<section id="home" class="home pt-5 overflow-hidden">
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner">
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
                  <div class="carousel-item active">
                        <div class="home-banner home-banner1">
                              <div class="home-banner-text">
                                    <h1>Men</h1>
                                    <h2 class="text-dark">52% Discount For This Season</h2>
                                    <a href="#products1" class="btn btn-danger text-uppercase mt-4">Our Product</a>
                              </div>
                        </div>
                  </div>
                  <div class="carousel-item">
                        <div class="home-banner home-banner2">
                              <div class="home-banner-text">
                                    <h1>E-Shop</h1>
                                    <h2 class="text-light">With Working Card & Pay Pal</h2>
                                    <a href="#products2" class="btn btn-danger text-uppercase mt-4">Our Product</a>
                              </div>
                        </div>
                  </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true">
                        <span class="ti-angle-left slider-icon"></span>
                  </span>
                  <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true">
                        <span class="ti-angle-right slider-icon"></span>
                  </span>
                  <span class="visually-hidden">Next</span>
            </button>
</div>

      <!--Offer Section-->
      <div class="offers">
            <div class="container">
                  <div class="row">
                        <!--Offer Box One-->
                        <div class="col-sm-6 col-lg-4 mb-lg-0 mb-4">
                              <a href="#">
                                    <div class="offer-box text-center position-relative">
                                          <div class="offer-inner">
                                                <div class="offer-image position-relative overflow-hidden">
                                                      <img src="assests/images/offer1.jpg" alt="offers" class="img-fluid">
                                                      <div class="offer-overlay"></div>
                                                </div>
                                                <div class="offer-info">
                                                      <div class="offer-info-inner">
                                                            <p class="heading-bigger text-capitalize">Sale 30%</p>
                                                            <p class="offer-title-1 text-uppercase font-weight-bold">Don't Miss This Chance</p>
                                                            <button type="button" class="btn btn-outline-danger text-uppercase mt-4"><a href="#11" class="text-light">Shop Now</a></button>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                              </a>
                        </div>
                        <!--Offer Box Two-->
                        <div class="col-sm-6 col-lg-4 mb-lg-0 mb-4 d-flex flex-column justify-content-around">
                              <a href="#">
                                    <div class="offer-box text-center position-relative mb-4 mb-sm-0 mb-lg-0">
                                          <div class="offer-inner">
                                                <div class="offer-image position-relative overflow-hidden">
                                                      <img src="assests/images/offer2.jpg" alt="offers" class="img-fluid">
                                                      <div class="offer-overlay"></div>
                                                </div>
                                                <div class="offer-info">
                                                      <div class="offer-info-inner">
                                                            <span class="text-warning fw-bold fs-3">[STOCK OUT]</span>
                                                            <p class="heading-bigger text-capitalize">Sale 70%</p>
                                                            <p class="offer-title-1 text-uppercase font-weight-bold">Don't Miss This Chance</p>
                                                            {{-- <button type="button" class="btn btn-outline-danger text-uppercase mt-4">Shop Now</button> --}}
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                              </a>
                              <a href="#">
                                    <div class="offer-box text-center position-relative">
                                          <div class="offer-inner">
                                                <div class="offer-image position-relative overflow-hidden">
                                                      <img src="assests/images/offer3.jpg" alt="offers" class="img-fluid">
                                                      <div class="offer-overlay"></div>
                                                </div>
                                                <div class="offer-info">
                                                      <div class="offer-info-inner">
                                                            <span class="text-warning fw-bold fs-3">[STOCK OUT]</span>
                                                            <p class="heading-bigger text-capitalize">Sale 50%</p>
                                                            <p class="offer-title-1 text-uppercase font-weight-bold">Don't Miss This Chance</p>
                                                            {{-- <button type="button" class="btn btn-outline-danger text-uppercase mt-4">Shop Now</button> --}}
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                              </a>
                        </div>
                        <!--Offer Box Three-->
                        <div class="col-sm-6 col-lg-4 mb-lg-0 mb-4">
                              <a href="#">
                                    <div class="offer-box text-center position-relative">
                                          <div class="offer-inner">
                                                <div class="offer-image position-relative overflow-hidden">
                                                      <img src="assests/images/offer4.jpg" alt="offers" class="img-fluid">
                                                      <div class="offer-overlay"></div>
                                                </div>
                                                <div class="offer-info">
                                                      <div class="offer-info-inner">
                                                            <p class="heading-bigger text-capitalize">Sale 25%</p>
                                                            <p class="offer-title-1 text-uppercase font-weight-bold">Don't Miss This Chance</p>
                                                            <button type="button" class="btn btn-outline-danger text-uppercase mt-4"><a href="#10" class="text-light">Shop Now</a></button>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                              </a>
                        </div>
                  </div>
            </div>
      </div>
</section>

<!--- Products Section-->
<section id="products1" class="products">
      <div class="container">
            <div class="row">
                  <div class="col-sm-12">
                        <div class="headline text-center mb-5">
                              <h2 class="pb-3 position-relative d-inline-block">T-Shirt's</h2>
                        </div>
                  </div>
            </div>
            <div class="row">
                  @foreach ($tshirts as $item)
                  <div class="col-sm-6 col-lg-4">
                        {{-- <a href="#" class="d-block text-center mb-4"> --}}
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
                                                <a class="btn btn-danger text-uppercase px-3 py-1 mx-5 rounded-3" href="">Delete</a>
                                          @else
                                                <a class="btn btn-danger text-uppercase px-3 py-1 text-center text-light rounded-3" href="{{url('storage/'.$item->product_id)}}">BUY Now</a>
                                          @endif
                                    </div>
                              </div>
                        {{-- </a> --}}
                  </div>
                  @endforeach
                  {{-- <div class="col-sm-6 col-lg-4">
                        <a href="#" class="d-block text-center mb-4">
                              <div class="product-list">
                                    <div class="product-img position-relative">
                                          <img src="assests/images/p2.jpg" class="img-fluid product-image-first" alt="products">
                                    </div>
                                    <div class="product-name pt-3">
                                          <h3 class="text-capitalize">Stylish Boy's T-Shrirt</h3>
                                          <p class="mb-0 amount">$500.00</p>
                                          
                                          <button type="submit" class="btn btn-danger text-uppercase px-3 py-1 rounded-3">BUY</button>
                                    </div>
                              </div>
                        </a>
                  </div>
                  <div class="col-sm-6 col-lg-4">
                        <a href="#" class="d-block text-center mb-4">
                              <div class="product-list">
                                    <div class="product-img position-relative">
                                          <span class="sale">Sale</span>
                                          <img src="assests/images/p3.jpg" class="img-fluid product-image-first" alt="products">
                                    </div>
                                    <div class="product-name pt-3">
                                          <h3 class="text-capitalize">White T-Shirt</h3>
                                          <p class="mb-0 amount">$300.00 <del>$400.00</del></p>
                                          
                                          <button type="submit" class="btn btn-danger text-uppercase px-3 py-1 rounded-3">BUY</button>
                                    </div>
                              </div>
                        </a>
                  </div>
                  <div class="col-sm-6 col-lg-4">
                        <a href="#" class="d-block text-center mb-4">
                              <div class="product-list">
                                    <div class="product-img position-relative">
                                          <img src="assests/images/p4.jpg" class="img-fluid product-image-first" alt="products">
                                    </div>
                                    <div class="product-name pt-3">
                                          <h3 class="text-capitalize">Orange T-Shirt</h3>
                                          <p class="mb-0 amount">$300.00</p>
                                          
                                          <button type="submit" class="btn btn-danger text-uppercase px-3 py-1 rounded-3">BUY</button>
                                    </div>
                              </div>
                        </a>
                  </div>
                  <div class="col-sm-6 col-lg-4">
                        <a href="#" class="d-block text-center mb-4">
                              <div class="product-list">
                                    <div class="product-img position-relative">
                                          <span class="sale">Sale</span>
                                          <img src="assests/images/p5.jpg" class="img-fluid product-image-first" alt="products">
                                    </div>
                                    <div class="product-name pt-3">
                                          <h3 class="text-capitalize">Dedicated T-Shirt</h3>
                                          <p class="mb-0 amount">$430.00 <del>$600.00</del></p>
                                          
                                          <button type="submit" class="btn btn-danger text-uppercase px-3 py-1 rounded-3">BUY</button>
                                    </div>
                              </div>
                        </a>
                  </div>
                  <div class="col-sm-6 col-lg-4">
                        <a href="#" class="d-block text-center mb-4">
                              <div class="product-list">
                                    <div class="product-img position-relative">
                                          <img src="assests/images/p6.jpg" class="img-fluid product-image-first" alt="products">
                                    </div>
                                    <div class="product-name pt-3">
                                          <h3 class="text-capitalize">Marshmello's Collection</h3>
                                          <p class="mb-0 amount">$770.00</p>
                                          
                                          <button type="submit" class="btn btn-danger text-uppercase px-3 py-1 rounded-3">BUY</button>
                                    </div>
                              </div>
                        </a>
                  </div>
                  <div class="col-sm-6 col-lg-4">
                        <a href="#" class="d-block text-center mb-4">
                              <div class="product-list">
                                    <div class="product-img position-relative">
                                          <img src="assests/images/p7.jpg" class="img-fluid product-image-first" alt="products">
                                    </div>
                                    <div class="product-name pt-3">
                                          <h3 class="text-capitalize">Black T-Shirts</h3>
                                          <p class="mb-0 amount">$585.00</p>
                                          
                                          <button type="submit" class="btn btn-danger text-uppercase px-3 py-1 rounded-3">BUY</button>
                                    </div>
                              </div>
                        </a>
                  </div>
                  <div class="col-sm-6 col-lg-4">
                        <a href="#" class="d-block text-center mb-4">
                              <div class="product-list">
                                    <div class="product-img position-relative">
                                          <img src="assests/images/p8.jpg" class="img-fluid product-image-first" alt="products">
                                    </div>
                                    <div class="product-name pt-3">
                                          <h3 class="text-capitalize">Handsome Boy's T-Shirt</h3>
                                          <p class="mb-0 amount">$770.00</p>
                                          
                                          <button type="submit" class="btn btn-danger text-uppercase px-3 py-1 rounded-3">BUY</button>
                                    </div>
                              </div>
                        </a>
                  </div>
                  <div class="col-sm-6 col-lg-4">
                        <a href="#" class="d-block text-center mb-4">
                              <div class="product-list">
                                    <div class="product-img position-relative">
                                          <img src="assests/images/p9.jpg" class="img-fluid product-image-first" alt="products">
                                    </div>
                                    <div class="product-name pt-3">
                                          <h3 class="text-capitalize">Cute Stylish Boys Black T-Shirt</h3>
                                          <p class="mb-0 amount">$800.00</p>
                                          
                                          <button type="submit" class="btn btn-danger text-uppercase px-3 py-1 rounded-3">BUY</button>
                                    </div>
                              </div>
                        </a>
                  </div> --}}
            </div>

            <!--Up to 75% Off-->
      </div>
</section>
<section id="products2" class="products">
      <div class="container">
            <div class="row">
                  <div class="col-sm-12">
                        <div class="headline text-center mb-5">
                              <h2 class="pb-3 position-relative d-inline-block">{{$name}}'s</h2>
                        </div>
                  </div>
            </div>
            <div class="row">
                  @foreach ($blaizers as $item)
                  <div class="col-sm-6 col-lg-4">
                        {{-- <a href="#" class="d-block text-center mb-4"> --}}
                              <div class="product-list my-3">
                                    <div class="product-img position-relative">
                                          <span class="sale">For Sale</span>
                                          <img id="{{$item->product_id}}" src={{"storage/$item->product"}} class="img-fluid product-image-first" alt="products">
                                    </div>
                                    <div class="product-name pt-3">
                                          <h3 class="text-capitalize text-center">{{$item->pname}}</h3>
                                          <p class="mb-0 amount text-center">৳{{$item->amount}}.00 </p>
                                          @if ($admin == $a_id)
                                                <a class="btn btn-primary text-uppercase px-3 py-1 mx-5 rounded-3" href="{{url("$item->product_id/edit")}}">Edit</a>
                                                <a class="btn btn-danger text-uppercase px-3 py-1 mx-5 rounded-3" href="">Delete</a>
                                          @else
                                                <a class="btn btn-danger text-uppercase px-3 py-1 text-center text-light rounded-3" href="{{url('storage/'.$item->product_id)}}">BUY Now</a>
                                          @endif
                                    </div>
                              </div>
                        {{-- </a> --}}
                  </div>
                  @endforeach
            </div>
      </div>
</section>
<section id="products3" class="products">
      <div class="container">
            <div class="row">
                  <div class="col-sm-12">
                        <div class="headline text-center mb-5">
                              <h2 class="pb-3 position-relative d-inline-block">{{$watch}}'s</h2>
                        </div>
                  </div>
            </div>
            <div class="row">
                  @foreach ($watches as $item)
                  <div class="col-sm-6 col-lg-4">
                        {{-- <a href="#" class="d-block text-center mb-4"> --}}
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
                        {{-- </a> --}}
                  </div>
                  @endforeach
            </div>

            <!--Up to 75% Off-->
            <div class="overflow-hidden my-5">
                  <div class="row">
                        <div class="col-sm-12 up_to_off">
                              <img src="assests/images/lg.jpg" class="img-fluid w-100" alt="offer">
                              <div class="up_to_content">
                                    <h2>UP TO 75% OFF SPRINGSALE</h2>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
</section>

<!--- Special Section-->
<section id="special" class="special">
      <div class="container">
            <div class="row">
                  <div class="col-sm-12">
                        <div class="headline text-center mb-5">
                              <h2 class="pb-3 position-relative d-inline-block">SUMMER SALE</h2>
                        </div>
                  </div>
                  <div class="col-sm-12 col-lg-7 text-center text-lg-start">
                        <div class="countdown-container">
                              <h2 class="text-uppercase">{{$offer->pname}}</h2>
                              <p class="my-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                              <ul class="list-unstyled countdown-counter">
                                    <li><span class="fs-1 d-block" id="days">00</span>Days</li>
                                    <li><span class="fs-1 d-block" id="hours">00</span>Hr</li>
                                    <li><span class="fs-1 d-block" id="min">00</span>Min</li>
                                    <li><span class="fs-1 d-block" id="sec">00</span>Sec</li>
                              </ul>
                              <span class="countdown-price h3 d-block mb-4"> ৳420.00 <del>৳{{$offer->amount}}.00</del></span>
                              @if ($admin == $a_id)
                                    <a class="btn btn-primary text-uppercase px-3 py-1 mx-5 rounded-3" href="{{url("$offer->product_id/edit")}}">Edit</a>
                                    <a class="btn btn-danger text-uppercase px-3 py-1 mx-5 rounded-3" href="{{url("$offer->product_id/delete")}}">Delete</a>
                              @else
                                    <a href="{{url('discount/'.$offer->product_id)}}" type="button" class="btn btn-danger">Buy Now</a>
                              @endif
                        </div>
                  </div>
                  <div class="col-sm-12 col-lg-5">
                        <div class="special-img position-relative">
                              <span class="sale">Sale</span>
                              <img src={{"storage/$offer->product"}} alt="special" class="img-fluid">
                        </div>
                  </div>
            </div>
      </div>
</section>
 
<!--- Testimonial Section-->
<section id="testimonial" class="testimonial">
      <div class="container">
            <div class="row">
                  <div class="col-sm-12">
                        <div class="headline text-center mb-5">
                              <h2 class="pb-3 position-relative d-inline-block">Reviews</h2>
                        </div>
                  </div>
                  <div class="col-sm-12 col-lg-8 offset-lg-2 text-center">
                        <div id="carouselExampleIndicatorsTwo" class="carousel slide" data-bs-ride="carousel">
                              <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExampleIndicatorsTwo" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicatorsTwo" data-bs-slide-to="1" aria-label="Slide 2"></button>
                              </div>
                              <div class="carousel-inner">
                                    <div class="carousel-item active">
                                          <div class="testimonial-wrapper">
                                                <div class="row">
                                                      <div class="col-sm-12">
                                                            <img src="{{"storage/$user2->image"}}" alt="" class="img-fluid">
                                                      </div>
                                                      <div class="username">
                                                            <h3>{{$user2->name}}</h3>
                                                            <span>Fastcompany Ltd.</span>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                                    <div class="carousel-item">
                                          <div class="testimonial-wrapper">
                                                <div class="row">
                                                      <div class="col-sm-12">
                                                            <img src="{{"storage/$user1->image"}}" alt="" class="img-fluid">
                                                      </div>
                                                      <div class="username">
                                                            <h3>{{$user1->name}}</h3>
                                                            <span>Fastcompany Ltd.</span>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicatorsTwo" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true">
                                          <span class="ti-angle-left slider-icon"></span>
                                    </span>
                                    <span class="visually-hidden">Previous</span>
                              </button>
                              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicatorsTwo" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true">
                                          <span class="ti-angle-right slider-icon"></span>
                                    </span>
                                    <span class="visually-hidden">Next</span>
                              </button>
                        </div>
                  </div>
            </div>
      </div>
</section>

<!--- Footer Section-->
<footer>
      <div class="p-3 copyright">
            <div class="container">
                  <div class="row align-items-center">
                        <div class="col-12 col-lg-6 p-1 p-lg-3 text-center text-lg-start">
                              <p class="my-0">Copyright C 2023 <a href="#">E-SHOP</a> All Rights Reserved</p>
                        </div>
                        <div class="col-12 col-lg-6 p-1 p-lg-3 text-center text-lg-end">
                              <p class="my-0">Designed by <a href="#" target="_blank">HABIBUR-RAHMAN</a>.</p>
                        </div>
                  </div>
            </div>
      </div>
</footer>

    
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
