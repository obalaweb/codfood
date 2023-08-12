<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- color of address bar in mobile browser -->
  <meta name="theme-color" content="#F5C332">
  <!-- favicon  -->
  <link rel="shortcut icon" href="{{ asset('img/ui/logo.ico') }}" type="image/x-icon">
  <!-- font awesome css -->
  <link rel="stylesheet" href="{{ asset('css/plugins/font-awesome.min.css') }}">
  <!-- bootstrap css -->
  <link rel="stylesheet" href="{{ asset('css/plugins/bootstrap.min.css') }}">
  <!-- swiper css -->
  <link rel="stylesheet" href="{{ asset('css/plugins/swiper.min.css') }}">
  <!-- datepicker css -->
  <link rel="stylesheet" href="{{ asset('css/plugins/datepicker.css') }}">
  <!-- mapbox css -->
  <link href="{{ asset('css/plugins/mapbox-style.css') }}" rel='stylesheet'>
  <!-- fancybox css -->
  <link rel="stylesheet" href="{{ asset('css/plugins/fancybox.min.css') }}">
  <!-- starbelly css -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <!-- page title -->
  <title>Starbelly</title>
</head>

<body>
  <!-- app wrapper -->
  <div class="sb-app">
    <!-- preloader -->
    <div class="sb-preloader">
      <div class="sb-preloader-bg"></div>
      <div class="sb-preloader-body">
        <div class="sb-loading">
          <div class="sb-percent"><span class="sb-preloader-number" data-count="101">00</span><span>%</span></div>
        </div>
        <div class="sb-loading-bar">
          <div class="sb-bar"></div>
        </div>
      </div>
    </div>
    <!-- preloader end -->
    <!-- click effect -->
    <div class="sb-click-effect"></div>
    <!-- loader -->
    <div class="sb-load"></div>
    <!-- top bar -->
    <div class="sb-top-bar-frame">
      <div class="sb-top-bar-bg"></div>
      <div class="container">
        <div class="sb-top-bar">
          <a href="home-2.html" class="sb-logo-frame">
            <!-- logo img -->
            <img src="{{ asset('img/ui/logo.svg') }}" alt="Starbelly">
          </a>
          <!-- menu -->
          <div class="sb-right-side">
            <nav id="sb-dynamic-menu" class="sb-menu-transition">
              <ul class="sb-navigation">
                <li class="{{ (request()->is('/')) ? 'sb-active' : ''}}">
                  <a href="{{ route('front.index') }}">Home</a>
                </li>
                <li class="{{ (request()->is('menu')) ? 'sb-active' : ''}}">
                  <a href="{{ route('front.menu') }}">Menu</a>
                </li>
                <li class="{{ (request()->is('shop')) ? 'sb-active' : ''}}">
                  <a href="{{ route('shop') }}">Shop</a>
                </li>
                <li class="{{ (request()->is('contact-us')) ? 'sb-active' : ''}}">
                  <a href="{{ route('contact') }}">Contact</a>
                </li>
              </ul>
            </nav>
            <div class="sb-buttons-frame">
              <!-- button -->
              <div class="sb-btn sb-btn-2 sb-btn-gray sb-btn-icon sb-m-0 sb-btn-cart">
                <span class="sb-icon">
                  <img src="{{ asset('img/ui/icons/cart.svg') }}" alt="icon">
                </span>
                <i class="sb-cart-number">5</i>
              </div>
              <!-- button end -->
              <!-- menu btn -->
              <div class="sb-menu-btn"><span></span></div>
              <!-- info btn -->
              <div class="sb-info-btn"><span></span></div>
            </div>
          </div>
        </div>
      </div>
      <!-- info bar -->
      <div class="sb-info-bar">
        <div class="sb-infobar-content">
          <div class="sb-ib-title-frame sb-mb-30">
            <h4>Contact</h4><i class="fas fa-arrow-down"></i>
          </div>
          <ul class="sb-list sb-mb-30">
            <li><b>Address:</b><span>Montréal, 1510 Rue Sauvé</span></li>
            <li><b>Working hours:</b><span>09:00 - 23:00</span></li>
            <li><b>Phone:</b><span>+02 (044) 756-X6-52</span></li>
            <li><b>Email:</b><span>starbelly@mail.com</span></li>
          </ul>
          <div class="sb-ib-title-frame sb-mb-30">
            <h4>Instagram</h4><i class="fas fa-arrow-down"></i>
          </div>
          <ul class="sb-instagram sb-mb-30">
            <li><a href="#."><img src="{{ asset('img/instagram/1.png') }}" alt="instagram"></a></li>
            <li><a href="#."><img src="{{ asset('img/instagram/2.png') }}" alt="instagram"></a></li>
            <li><a href="#."><img src="{{ asset('img/instagram/3.png') }}" alt="instagram"></a></li>
            <li><a href="#."><img src="{{ asset('img/instagram/4.png') }}" alt="instagram"></a></li>
            <li><a href="#."><img src="{{ asset('img/instagram/5.png') }}" alt="instagram"></a></li>
            <li><a href="#."><img src="{{ asset('img/instagram/6.png') }}" alt="instagram"></a></li>
          </ul>
          <hr>
          <div class="sb-ib-title-frame sb-mb-30">
            <h4>Latest publications</h4><i class="fas fa-arrow-down"></i>
          </div>
          <a href="publication-1.html" class="sb-blog-card sb-blog-card-sm sb-mb-30">
            <div class="sb-cover-frame">
              <img src="{{ asset('img/blog/1.png') }}" alt="cover">
            </div>
            <div class="sb-blog-card-descr">
              <h5 class="sb-mb-5">Simple Homemade Tomato Soup</h5>
              <p class="sb-text sb-text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero optio, sed expedita.</p>
            </div>
          </a>
          <a href="publication-1.html" class="sb-blog-card sb-blog-card-sm sb-mb-30">
            <div class="sb-cover-frame">
              <img src="{{ asset('img/blog/2.png') }}" alt="cover">
            </div>
            <div class="sb-blog-card-descr">
              <h5 class="sb-mb-5">Thai Coconut Soup with Tofu and Rice</h5>
              <p class="sb-text sb-text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero optio, sed expedita.</p>
            </div>
          </a>
          <a href="publication-1.html" class="sb-blog-card sb-blog-card-sm sb-mb-30">
            <div class="sb-cover-frame">
              <img src="{{ asset('img/blog/3.png') }}" alt="cover">
            </div>
            <div class="sb-blog-card-descr">
              <h5 class="sb-mb-5">21 Things You Should Absolutely Be Buying at ALDI</h5>
              <p class="sb-text sb-text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero optio, sed expedita.</p>
            </div>
          </a>
        </div>
        <div class="sb-info-bar-footer">
          <ul class="sb-social">
            <li><a href="#."><i class="far fa-circle"></i></a></li>
            <li><a href="#."><i class="far fa-circle"></i></a></li>
            <li><a href="#."><i class="far fa-circle"></i></a></li>
            <li><a href="#."><i class="far fa-circle"></i></a></li>
          </ul>
        </div>
      </div>
      <!-- info bar end -->
      <!-- minicart -->
      <div class="sb-minicart">
        <div class="sb-minicart-content">
          <div class="sb-ib-title-frame sb-mb-30">
            <h4>Your order.</h4><i class="fas fa-arrow-down"></i>
          </div>
          <a href="product.html" class="sb-menu-item sb-menu-item-sm sb-mb-15">
            <div class="sb-cover-frame">
              <img src="{{ asset('img/menu/4.png') }}" alt="product">
            </div>
            <div class="sb-card-tp">
              <h4 class="sb-card-title">Saumon Gravlax</h4>
              <div class="sb-price"><sub>$</sub> 9</div>
            </div>
          </a>
          <a href="product.html" class="sb-menu-item sb-menu-item-sm sb-mb-15">
            <div class="sb-cover-frame">
              <img src="{{ asset('img/menu/1.png') }}" alt="product">
            </div>
            <div class="sb-card-tp">
              <h4 class="sb-card-title">Chevrefrit au miel</h4>
              <div class="sb-price"><sub>$</sub> 14</div>
            </div>
          </a>
          <a href="product.html" class="sb-menu-item sb-menu-item-sm sb-mb-15">
            <div class="sb-cover-frame">
              <img src="{{ asset('img/menu/2.png') }}" alt="product">
            </div>
            <div class="sb-card-tp">
              <h4 class="sb-card-title">Croustillant de poisson</h4>
              <div class="sb-price"><sub>$</sub> 4</div>
            </div>
          </a>
          <a href="product.html" class="sb-menu-item sb-menu-item-sm sb-mb-15">
            <div class="sb-cover-frame">
              <img src="{{ asset('img/menu/3.png') }}" alt="product">
            </div>
            <div class="sb-card-tp">
              <h4 class="sb-card-title">Stracciatella</h4>
              <div class="sb-price"><sub>$</sub> 11</div>
            </div>
          </a>
          <a href="product.html" class="sb-menu-item sb-menu-item-sm sb-mb-15">
            <div class="sb-cover-frame">
              <img src="{{ asset('img/menu/5.png') }}" alt="product">
            </div>
            <div class="sb-card-tp">
              <h4 class="sb-card-title">Carpaccio de daurade</h4>
              <div class="sb-price"><sub>$</sub> 19</div>
            </div>
          </a>
        </div>
        <div class="sb-minicart-footer">
          <!-- button -->
          <a href="cart.html" class="sb-btn sb-btn-gray sb-btn-text">
            <span>View order</span>
          </a>
          <!-- button end -->
          <!-- button -->
          <a href="checkout.html" class="sb-btn sb-btn-text">
            <span>Checkout</span>
          </a>
          <!-- button end -->
        </div>
      </div>
      <!-- minicart end -->
    </div>
    <!-- top bar end -->
    
    @yield('content')
    
    <!-- footer -->
<footer>
    <div class="container">
      <div class="sb-footer-frame">
        <a href="home-1.html" class="sb-logo-frame">
          <!-- logo img -->
          <img src="{{ asset('img/ui/logo.svg') }}" alt="Starbelly">
        </a>
        <ul class="sb-social">
          <li><a href="#."><i class="far fa-circle"></i></a></li>
          <li><a href="#."><i class="far fa-circle"></i></a></li>
          <li><a href="#."><i class="far fa-circle"></i></a></li>
          <li><a href="#."><i class="far fa-circle"></i></a></li>
        </ul>
        <div class="sb-copy">&copy; late 2023 Starbelly. All Rights Reserved.</div>
      </div>
    </div>
  </footer>
  <!-- footer end -->

</div>
<!-- dynamic content end -->

<!-- discount popup -->
{{-- <div class="sb-popup-frame">
  <div class="sb-popup-body">
    <div class="sb-close-popup">+</div>
    <div class="sb-promo-content">
      <div class="sb-text-frame">
        <h3 class="sb-mb-15">Visit Starbelly and get your coffee*</h3>
        <h3 class="sb-mb-10"><b class="sb-h2">FOR FREE!</b></h3>
        <p class="sb-text sb-text-sm sb-mb-15">*Et modi itaque praesentium.</p>
        <!-- button -->
        <a href="product.html" class="sb-btn sb-ppc">
          <span class="sb-icon">
            <img src="{{ asset('img/ui/icons/arrow.svg') }}') }}" alt="icon">
          </span>
          <span>Get it now</span>
        </a>
        <!-- button end -->
      </div>
      <div class="sb-image-frame">
        <div class="sb-illustration-5">
          <img src="{{ asset('img/illustrations/cup.png') }}" alt="cup" class="sb-cup">
          <div class="sb-cirkle-1"></div>
          <div class="sb-cirkle-2"></div>
          <div class="sb-cirkle-3"></div>
        </div>
      </div>
    </div>
  </div>
</div> --}}
<!-- discount popup end -->

</div>
<!-- app wrapper end -->

<!-- jquery js -->
<script src="{{ asset('js/plugins/jquery.min.js') }}"></script>
<!-- smooth scroll js -->
<script src="{{ asset('js/plugins/smooth-scroll.js') }}"></script>
<!-- swup js -->
<script src="{{ asset('js/plugins/swup.min.js') }}"></script>
<!-- swiper js -->
<script src="{{ asset('js/plugins/swiper.min.js') }}"></script>
<!-- datepicker js -->
<script src="{{ asset('js/plugins/datepicker.js') }}"></script>
<!-- isotope js -->
<script src="{{ asset('js/plugins/isotope.js') }}"></script>
<!-- sticky -->
<script src="{{ asset('js/plugins/sticky.js') }}"></script>
<!-- mapbox js -->
<script src="{{ asset('js/plugins/mapbox.min.js') }}"></script>
<!-- fancybox js -->
<script src="{{ asset('js/plugins/fancybox.min.js') }}"></script>
<!-- starbelly js -->
<script src="{{ asset('js/main.js') }}"></script>

</body>

</html>