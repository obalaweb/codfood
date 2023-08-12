@extends('layouts.app')

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
                        <h1 class="sb-h2">Your order.</h1>
                        <ul class="sb-breadcrumbs">
                          <li><a href="home-1.html">Home</a></li>
                          <li><a href="shop-1.html">Shop</a></li>
                          <li><a href="#.">Cart</a></li>
                        </ul>
                      </div>
                    </div>
                    <!-- main title end -->
                  </div>
                </div>
              </div>
            </section>
            <!-- banner end -->
      
            <!-- cart -->
            <section class="sb-p-90-90">
              <div class="container">
                <div class="sb-cart-table">
                  <div class="sb-cart-table-header">
                    <div class="row">
                      <div class="col-lg-6">Product</div>
                      <div class="col-lg-3">Quantity</div>
                      <div class="col-lg-1">Price</div>
                      <div class="col-lg-1">Total</div>
                      <div class="col-lg-1"></div>
                    </div>
                  </div>
                  <div class="sb-cart-item">
                    <div class="row align-items-center">
                      <div class="col-lg-6">
                        <a class="sb-product" href="product.html">
                          <div class="sb-cover-frame">
                            <img src="img/menu/1.jpg" alt="product">
                          </div>
                          <div class="sb-prod-description">
                            <h4 class="sb-mb-10">Chevrefrit au miel</h4>
                            <p class="sb-text sb-text-sm"><span>tomatoes</span>, <span>nori</span>, <span>feta cheese</span>, <span>mushrooms</span>, <span>rice noodles</span>, <span>corn</span>, <span>shrimp</span>.</p>
                          </div>
                        </a>
                      </div>
                      <div class="col-6 col-lg-3">
                        <div class="sb-input-number-frame">
                          <div class="sb-input-number-btn sb-sub">-</div>
                          <input type="number" value="1" min="1" max="10">
                          <div class="sb-input-number-btn sb-add">+</div>
                        </div>
                      </div>
                      <div class="col-3 col-lg-1">
                        <div class="sb-price-1"><span>Price: </span>$14.00</div>
                      </div>
                      <div class="col-3 col-lg-1">
                        <div class="sb-price-2"><span>Total: </span>$14.00</div>
                      </div>
                      <div class="col-1">
                        <a href="#." class="sb-remove">+</a>
                      </div>
                    </div>
                  </div>
                  <div class="sb-cart-item">
                    <div class="row align-items-center">
                      <div class="col-lg-6">
                        <a class="sb-product" href="product.html">
                          <div class="sb-cover-frame">
                            <img src="img/menu/2.jpg" alt="product">
                          </div>
                          <div class="sb-prod-description">
                            <h4 class="media-heading sb-mb-10">Carpaccio de daurade</h4>
                            <p class="sb-text sb-text-sm"><span>tomatoes</span>, <span>nori</span>, <span>feta cheese</span>, <span>mushrooms</span>, <span>rice noodles</span>, <span>corn</span>, <span>shrimp</span>.</p>
                          </div>
                        </a>
                      </div>
                      <div class="col-6 col-lg-3">
                        <div class="sb-input-number-frame">
                          <div class="sb-input-number-btn sb-sub">-</div>
                          <input type="number" value="1" min="1" max="10">
                          <div class="sb-input-number-btn sb-add">+</div>
                        </div>
                      </div>
                      <div class="col-3 col-lg-1">
                        <div class="sb-price-1"><span>Price: </span>$7.99</div>
                      </div>
                      <div class="col-3 col-lg-1">
                        <div class="sb-price-2"><span>Total: </span>$7.99</div>
                      </div>
                      <div class="col-1">
                        <a href="#." class="sb-remove">+</a>
                      </div>
                    </div>
                  </div>
                  <div class="sb-cart-item">
                    <div class="row align-items-center">
                      <div class="col-lg-6">
                        <a class="sb-product" href="product.html">
                          <div class="sb-cover-frame">
                            <img src="img/menu/3.jpg" alt="product">
                          </div>
                          <div class="sb-prod-description">
                            <h4 class="media-heading sb-mb-10">Stracciatella</h4>
                            <p class="sb-text sb-text-sm"><span>tomatoes</span>, <span>nori</span>, <span>feta cheese</span>, <span>mushrooms</span>, <span>rice noodles</span>, <span>corn</span>, <span>shrimp</span>.</p>
                          </div>
                        </a>
                      </div>
                      <div class="col-6 col-lg-3">
                        <div class="sb-input-number-frame">
                          <div class="sb-input-number-btn sb-sub">-</div>
                          <input type="number" value="1" min="1" max="10">
                          <div class="sb-input-number-btn sb-add">+</div>
                        </div>
                      </div>
                      <div class="col-3 col-lg-1">
                        <div class="sb-price-1"><span>Price: </span>$11.00</div>
                      </div>
                      <div class="col-3 col-lg-1">
                        <div class="sb-price-2"><span>Total: </span>$11.00</div>
                      </div>
                      <div class="col-1">
                        <a href="#." class="sb-remove">+</a>
                      </div>
                    </div>
                  </div>
      
                  <div class="row justify-content-end">
                    <div class="col-lg-6">
                      <div class="sb-cart-total">
                        <div class="sb-sum">
                          <div class="row">
                            <div class="col-8">
                              <div class="sb-total-title">Subtotal:</div>
                            </div>
                            <div class="col-4">
                              <div class="sb-price-1 text-right">$32.99</div>
                            </div>
                          </div>
                        </div>
                        <div class="sb-sum">
                          <div class="row">
                            <div class="col-8">
                              <div class="sb-total-title">Estimated shipping:</div>
                            </div>
                            <div class="col-4">
                              <div class="sb-price-1 text-right">$5</div>
                            </div>
                          </div>
                        </div>
                        <div class="sb-realy-sum">
                          <div class="row">
                            <div class="col-8">
                              <div class="sb-total-title">Total:</div>
                            </div>
                            <div class="col-4">
                              <div class="sb-price-2 text-right">$37.99</div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="sb-cart-btns-frame text-right">
                        <!-- button -->
                        <a href="shop-1.html" class="sb-btn sb-btn-2 sb-btn-gray">
                          <span class="sb-icon">
                            <img src="img/ui/icons/arrow-2.svg" alt="icon">
                          </span>
                          <span>Continue shopping</span>
                        </a>
                        <!-- button end -->
                        <!-- button -->
                        <a href="checkout.html" class="sb-btn sb-m-0">
                          <span class="sb-icon">
                            <img src="img/ui/icons/arrow.svg" alt="icon">
                          </span>
                          <span>Checkout</span>
                        </a>
                        <!-- button end -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <!-- cart end -->
@endsection