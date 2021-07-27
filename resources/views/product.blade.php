@extends('master')
@section("content")

<div class="flex-container">
    <div>
        <img class="img-fluid category-img" src="https://rukminim1.flixcart.com/flap/128/128/image/f15c02bfeb02d15d.png?q=100" alt="category-item">
        <p class="text-center font-weight-bold">Top Offers</p>
    </div>
    <div>
        <img class="img-fluid category-img" src="https://rukminim1.flixcart.com/flap/128/128/image/29327f40e9c4d26b.png?q=100" alt="category-item">
        <p class="text-center font-weight-bold">Grocery</p>
    </div>
    <div>
        <img class="img-fluid category-img" src="https://rukminim1.flixcart.com/flap/128/128/image/69c6589653afdb9a.png?q=100" alt="category-item">
        <p class="text-center font-weight-bold">Electronics</p>
    </div>
    <div>
        <img class="img-fluid category-img" src="https://rukminim1.flixcart.com/flap/128/128/image/22fddf3c7da4c4f4.png?q=100" alt="category-item">
        <p class="text-center font-weight-bold">Mobiles</p>
    </div>
    <div>
        <img class="img-fluid category-img" src="https://rukminim1.flixcart.com/flap/128/128/image/0ff199d1bd27eb98.png?q=100" alt="category-item">
        <p class="text-center font-weight-bold">Appliances</p>
    </div>
    <div>
        <img class="img-fluid category-img" src="https://rukminim1.flixcart.com/flap/128/128/image/ee162bad964c46ae.png?q=100" alt="category-item">
        <p class="text-center font-weight-bold">Home</p>
    </div>
    <div>
        <img class="img-fluid category-img" src="https://rukminim1.flixcart.com/flap/128/128/image/71050627a56b4693.png?q=100" alt="category-item">
        <p class="text-center font-weight-bold">Travel</p>
    </div>
    <div>
        <img class="img-fluid category-img" src="https://rukminim1.flixcart.com/flap/128/128/image/dff3f7adcf3a90c6.png?q=100" alt="category-item">
        <p class="text-center font-weight-bold">Beauty, Toys & More</p>
    </div>
</div>

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/b1.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/b2.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile Shopee</title>

    <!-- Owl-carousel CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />
    
</head>
<body>



    <!-- start #main-site -->
        <main id="main-site">
          <!-- Top Sale -->
          <section id="top-sale">
            <div class="container py-3">
              <div class="section-header d-flex">
                <h4 class="me-auto">Top Sale</h4>
                <a href="/" class="btn btn-primary ms-auto">View All</a>
              </div>
              <hr>
              <!-- owl carousel -->
                <div class="owl-carousel owl-theme">
                @foreach ($products as $item)
                  <div class="item py-2">
                    <div class="product font-rale">
                      <a href="#"><img src="{{$item['gallery']}}" alt="product1" class="product-img img-fluid"></a>
                      <div class="text-center">
                        <h6>{{$item['name']}}</h6>
                        <div class="rating text-warning font-size-12">
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="far fa-star"></i></span>
                        </div>
                        <div class="price py-2">
                          <span>{{$item['price']}}</span>
                        </div>
                        <a href="detail/{{$item['id']}}" class="btn btn-warning font-size-12 w-50">View</a>
                      </div>
                    </div>
                  </div>
                @endforeach
                </div>
              <!-- !owl carousel -->
            </div>
          </section>
          <section id="top-sale">
            <div class="container py-3">
              <div class="section-header d-flex">
                <h4 class="me-auto">Featured Products</h4>
                <a href="/" class="btn btn-primary ms-auto">View All</a>
              </div>
              <hr>
              <!-- owl carousel -->
                <div class="owl-carousel owl-theme">
                @foreach ($products as $item)
                  <div class="item py-2">
                    <div class="product font-rale">
                      <a href="#"><img src="{{$item['gallery']}}" alt="product1" class="product-img img-fluid"></a>
                      <div class="text-center">
                        <h6>{{$item['name']}}</h6>
                        <div class="rating text-warning font-size-12">
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="far fa-star"></i></span>
                        </div>
                        <div class="price py-2">
                          <span>{{$item['price']}}</span>
                        </div>
                        <a href="detail/{{$item['id']}}" class="btn btn-warning font-size-12 w-50">View</a>
                      </div>
                    </div>
                  </div>
                @endforeach
                </div>
              <!-- !owl carousel -->
            </div>
          </section>
          <section id="top-sale">
            <div class="container py-3">
              <div class="section-header d-flex">
                <h4 class="me-auto">Men's Fashion</h4>
                <a href="/" class="btn btn-primary ms-auto">View All</a>
              </div>
              <hr>
              <!-- owl carousel -->
                <div class="owl-carousel owl-theme">
                @foreach ($products as $item)
                  <div class="item py-2">
                    <div class="product font-rale">
                      <a href="#"><img src="{{$item['gallery']}}" alt="product1" class="product-img img-fluid"></a>
                      <div class="text-center">
                        <h6>{{$item['name']}}</h6>
                        <div class="rating text-warning font-size-12">
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="far fa-star"></i></span>
                        </div>
                        <div class="price py-2">
                          <span>{{$item['price']}}</span>
                        </div>
                        <a href="detail/{{$item['id']}}" class="btn btn-warning font-size-12 w-50">View</a>
                      </div>
                    </div>
                  </div>
                @endforeach
                </div>
              <!-- !owl carousel -->
            </div>
          </section>
          <section id="top-sale">
            <div class="container py-3">
              <div class="section-header d-flex">
                <h4 class="me-auto">Kids Fashion</h4>
                <a href="/" class="btn btn-primary ms-auto">View All</a>
              </div>
              <hr>
              <!-- owl carousel -->
                <div class="owl-carousel owl-theme">
                @foreach ($products as $item)
                  <div class="item py-2">
                    <div class="product font-rale">
                      <a href="#"><img src="{{$item['gallery']}}" alt="product1" class="product-img img-fluid"></a>
                      <div class="text-center">
                        <h6>{{$item['name']}}</h6>
                        <div class="rating text-warning font-size-12">
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="far fa-star"></i></span>
                        </div>
                        <div class="price py-2">
                          <span>{{$item['price']}}</span>
                        </div>
                        <a href="detail/{{$item['id']}}" class="btn btn-warning font-size-12 w-50">View</a>
                      </div>
                    </div>
                  </div>
                @endforeach
                </div>
              <!-- !owl carousel -->
            </div>
          </section>
          <!-- !Top Sale -->
        </main>
    <!-- !start #main-site -->


    <!-- Owl Carousel Js file -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha256-pTxD+DSzIwmwhOqTFN+DB+nHjO4iAsbgfyFq5K5bcE0=" crossorigin="anonymous"></script>

    <script>
      $("#top-sale .owl-carousel").owlCarousel({
          loop: true,
          nav: true,
          dots: false,
          responsive : {
              0: {
                  items: 1
              },
              600: {
                  items: 3
              },
              1000 : {
                  items: 5
              }
          }
      });
    </script>

</body>
</html>

@endsection