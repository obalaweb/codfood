@extends('layouts.front')

@section('content')
        <!-- dynamic content -->
        <div id="sb-dynamic-content" class="sb-transition-fade">

            <!-- banner -->
            <section class="sb-banner sb-banner-xs sb-banner-color">
              <div class="container">
                <div class="row">
                  <div class="col-lg-12">
                    <!-- main title -->
                    <div class="sb-main-title-frame">
                      <div class="sb-main-title">
                        <h1 class="sb-h2">Starbelly menu</h1>
                        <ul class="sb-breadcrumbs">
                          <li><a href="{{ route('front.index') }}">Home</a></li>
                          <li><a href="#">Menu</a></li>
                        </ul>
                      </div>
                    </div>
                    <!-- main title end -->
                  </div>
                </div>
              </div>
            </section>
            <!-- banner end -->
      
            <!-- menu section 1 -->
            <section class="sb-menu-section sb-p-90-60">
              <div class="sb-bg-1">
                <div></div>
              </div>
              <div class="container">
                <!-- filter -->
                <div class="sb-filter mb-30">
                  <a href="#." data-filter="*" class="sb-filter-link sb-active">All dishes</a>
                  @foreach ($categories as $category)
                    <a href="#." data-filter=".{{ strtolower($category->id) }}" class="sb-filter-link">{{ $category->name }}</a>
                  @endforeach
                </div>
                <!-- filter end -->
                <div class="sb-masonry-grid">
                  <div class="sb-grid-sizer"></div>
                    @foreach ($menus as $menu)
                        <x-menus :menu="$menu"/>
                    @endforeach                  
                </div>
              </div>
            </section>
            <!-- menu end -->
      
            <!-- promo -->
            <section class="sb-p-0-60">
              <div class="container">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="sb-promo-frame sb-mb-30">
                      <div class="sb-promo-content">
                        <div class="sb-text-frame">
                          <h3 class="sb-mb-10"><sup>-</sup> <b class="sb-h2">50</b> <sup>%</sup></h3>
                          <h3 class="sb-mb-15">Discount for all* burgers!</h3>
                          <p class="sb-text sb-text-sm sb-mb-15">*Et modi itaque praesentium.</p>
                          <!-- button -->
                          <a href="{{ route('front.menu') }}" class="sb-btn sb-ppc">
                            <span class="sb-icon">
                              <img src="{{ asset('img/ui/icons/arrow.svg') }}" alt="icon">
                            </span>
                            <span>Get it now</span>
                          </a>
                          <!-- button end -->
                        </div>
                        <div class="sb-image-frame">
                          <div class="sb-illustration-4">
                            <img src="{{ asset('img/illustrations/burger.png') }}" alt="burger" class="sb-burger">
                            <div class="sb-cirkle-1"></div>
                            <div class="sb-cirkle-2"></div>
                            <div class="sb-cirkle-3"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="sb-promo-frame sb-mb-30">
                      <div class="sb-promo-content">
                        <div class="sb-text-frame">
                          <h3 class="sb-mb-15">Visit Starbelly and get your coffee*</h3>
                          <h3 class="sb-mb-10"><b class="sb-h2">For free!</b></h3>
                          <p class="sb-text sb-text-sm sb-mb-15">*Et modi itaque praesentium.</p>
                          <!-- button -->
                          <a href="product.html" class="sb-btn sb-ppc">
                            <span class="sb-icon">
                              <img src="{{ asset('img/ui/icons/arrow.svg') }}" alt="icon">
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
                  </div>
                </div>
              </div>
            </section>
        <!-- promo end -->
@endsection