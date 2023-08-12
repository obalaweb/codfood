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
                        <h1 class="sb-h2">Checkout</h1>
                        <ul class="sb-breadcrumbs">
                          <li><a href="home-1.html">Home</a></li>
                          <li><a href="shop-1.html">Shop</a></li>
                          <li><a href="#.">Checkout</a></li>
                        </ul>
                      </div>
                    </div>
                    <!-- main title end -->
                  </div>
                </div>
              </div>
            </section>
            <!-- banner end -->
      
            <!-- checkout -->
            <section class="sb-p-90-90">
              <div class="container" data-sticky-container>
                <div class="row">
                  <div class="col-lg-8">
                    <form class="sb-checkout-form">
                      <div class="sb-mb-30">
                        <h3>Billing details</h3>
                      </div>
                      <div class="row">
                        <div class="col-lg-6">
                          <div class="sb-group-input">
                            <input type="text" required>
                            <span class="sb-bar"></span>
                            <label>First name</label>
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="sb-group-input">
                            <input type="text" required>
                            <span class="sb-bar"></span>
                            <label>Last name</label>
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="sb-group-input">
                            <input type="text" required>
                            <span class="sb-bar"></span>
                            <label>Company name</label>
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="sb-group-input">
                            <input type="text" required>
                            <span class="sb-bar"></span>
                            <label>Country</label>
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="sb-group-input">
                            <input type="text" required>
                            <span class="sb-bar"></span>
                            <label>City</label>
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="sb-group-input">
                            <input type="text" required>
                            <span class="sb-bar"></span>
                            <label>State / Province</label>
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="sb-group-input">
                            <input type="text" required>
                            <span class="sb-bar"></span>
                            <label>Street</label>
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="sb-group-input">
                            <input type="text" required>
                            <span class="sb-bar"></span>
                            <label>Postcode</label>
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="sb-group-input">
                            <input type="tel" required>
                            <span class="sb-bar"></span>
                            <label>Phone</label>
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="sb-group-input">
                            <input type="email" required>
                            <span class="sb-bar"></span>
                            <label>Email</label>
                          </div>
                        </div>
                      </div>
                      <div class="sb-mb-30">
                        <h3>Additional information</h3>
                      </div>
                      <div class="sb-group-input">
                        <textarea name="name" required></textarea>
                        <span class="sb-bar"></span>
                        <label>Order notes</label>
                      </div>
                      <div class="sb-mb-30">
                        <h3 class="sb-mb-30">Payment method</h3>
                        <ul>
                          <li class="sb-radio">
                            <input type="radio" id="option-1" name="selector" checked>
                            <label for="option-1">Direct bank transfer</label>
                            <div class="sb-check"></div>
                          </li>
                          <li class="sb-radio">
                            <input type="radio" id="option-2" name="selector">
                            <label for="option-2">Check payments</label>
                            <div class="sb-check"></div>
                          </li>
                          <li class="sb-radio">
                            <input type="radio" id="option-3" name="selector">
                            <label for="option-3">Cash on delivery</label>
                            <div class="sb-check"></div>
                          </li>
                        </ul>
                      </div>
                      <!-- button -->
                      <button type="submit" class="sb-btn sb-m-0">
                        <span class="sb-icon">
                          <img src="img/ui/icons/arrow.svg" alt="icon">
                        </span>
                        <span>Place order</span>
                      </button>
                      <!-- button end -->
                    </form>
                  </div>
                  <div class="col-lg-4">
                    <div class="sb-pad-type-2 sb-sticky" data-margin-top="120">
                      <div class="sb-co-cart-frame">
                        <div class="sb-cart-table">
                          <div class="sb-cart-table-header">
                            <div class="row">
                              <div class="col-lg-9">Product</div>
                              <div class="col-lg-3 text-right">Total</div>
                            </div>
                          </div>
                          <div class="sb-cart-item">
                            <div class="row align-items-center">
                              <div class="col-lg-9">
                                <a class="sb-product" href="product.html">
                                  <div class="sb-cover-frame">
                                    <img src="img/menu/1.jpg" alt="product">
                                  </div>
                                  <div class="sb-prod-description">
                                    <h4 class="sb-mb-10">Chevrefrit au miel</h4>
                                    <p class="sb-text sb-text-sm">x2</p>
                                  </div>
                                </a>
                              </div>
                              <div class="col-lg-3 text-md-right">
                                <div class="sb-price-2"><span>Total: </span>$14.00</div>
                              </div>
                            </div>
                          </div>
                          <div class="sb-cart-item">
                            <div class="row align-items-center">
                              <div class="col-lg-9">
                                <a class="sb-product" href="product.html">
                                  <div class="sb-cover-frame">
                                    <img src="img/menu/2.jpg" alt="product">
                                  </div>
                                  <div class="sb-prod-description">
                                    <h4 class="sb-mb-10">Carpaccio de daurade</h4>
                                    <p class="sb-text sb-text-sm">x1</p>
                                  </div>
                                </a>
                              </div>
                              <div class="col-lg-3 text-md-right">
                                <div class="sb-price-2"><span>Total: </span>$7.99</div>
                              </div>
                            </div>
                          </div>
                          <div class="sb-cart-item">
                            <div class="row align-items-center">
                              <div class="col-lg-9">
                                <a class="sb-product" href="product.html">
                                  <div class="sb-cover-frame">
                                    <img src="img/menu/3.jpg" alt="product">
                                  </div>
                                  <div class="sb-prod-description">
                                    <h4 class="sb-mb-10">Stracciatella</h4>
                                    <p class="sb-text sb-text-sm">x1</p>
                                  </div>
                                </a>
                              </div>
                              <div class="col-lg-3 text-md-right">
                                <div class="sb-price-2"><span>Total: </span>$11.00</div>
                              </div>
                            </div>
                          </div>
                          <div class="sb-cart-total sb-cart-total-2">
                            <div class="sb-sum">
                              <div class="row">
                                <div class="col-6">
                                  <div class="sb-total-title">Subtotal:</div>
                                </div>
                                <div class="col-6">
                                  <div class="sb-price-1 text-right">$32.99</div>
                                </div>
                              </div>
                            </div>
                            <div class="sb-realy-sum">
                              <div class="row">
                                <div class="col-6">
                                  <div class="sb-total-title">Total:</div>
                                </div>
                                <div class="col-6">
                                  <div class="sb-price-2 text-right">$37.99</div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <!-- checkout end -->
@endsection