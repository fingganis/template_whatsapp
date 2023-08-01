
@extends('layouts/contentLayoutMaster')

@section('title', 'Pricing')

@section('page-style')
{{-- Page Css files --}}
<link rel="stylesheet" type="text/css" href="{{asset('css/base/pages/page-pricing.css')}}">
@endsection

@section('content')
<section id="pricing-plan">
  <!-- title text and switch button -->
  <div class="text-center">
    <h1 class="mt-5">Subscription</h1>
    <!-- <p class="mb-2 pb-75">
      All plans include 40+ advanced tools and features to boost your product. Choose the best plan to fit your needs.
    </p> -->
    <!-- <div class="d-flex align-items-center justify-content-center mb-5 pb-50">
      <h6 class="me-1 mb-0">Monthly</h6>
      <div class="form-check form-switch">
        <input type="checkbox" class="form-check-input" id="priceSwitch" />
        <label class="form-check-label" for="priceSwitch"></label>
      </div>
      <h6 class="ms-50 mb-0">Annually</h6>
    </div>
  </div> -->
  <!--/ title text and switch button -->

  <!-- pricing plan cards -->
  <div class="row pricing-card">
    <div class="col-12 col-sm-offset-2 col-sm-10 col-md-12 col-lg-offset-2 col-lg-10 mx-auto">
      <div class="row">
        <!-- basic plan -->
        <div class="col-12 col-md-4">
          <div class="card basic-pricing text-center">
            <div class="card-body">
              <img src="{{asset('images/illustration/Pot1.svg')}}" class="mb-2 mt-5" alt="svg img" />
              <h3>Stater</h3>
              <p class="card-text">Best for stater</p>
              <div class="annual-plan">
                <div class="plan-price mt-2">
                  <sup class="font-medium-1 fw-bold text-primary">$</sup>
                  <span class="pricing-basic-value fw-bolder text-primary">0</span>
                  <sub class="pricing-duration text-body font-medium-1 fw-bold">/month</sub>
                </div>
                <small class="annual-pricing d-none text-muted"></small>
              </div>
              <ul class="list-group list-group-circle text-start">
                <li class="list-group-item">100 instances</li>
                <li class="list-group-item">1000k Messages</li>
                <li class="list-group-item">100k Contacts</li>
                <li class="list-group-item">!00k Template Limit</li>
                <li class="list-group-item">Api allowed</li>
                <li class="list-group-item">Chatbot allowed</li>
                <li class="list-group-item">Bulk Messages allowed</li>
                <li class="list-group-item">Schedule Messages allowed</li>
                <li class="list-group-item">Allow Data Scraping</li>
                <li class="list-group-item">Allow Multi instances</li>
              </ul>
              <button class="btn w-100 btn-outline-success mt-2">Your current plan</button>
            </div>
          </div>
        </div>
        <!--/ basic plan -->

        <!-- standard plan -->
        <div class="col-12 col-md-4">
          <div class="card standard-pricing popular text-center">
            <div class="card-body">
              <div class="pricing-badge text-end">
                <span class="badge rounded-pill badge-light-primary">Popular</span>
              </div>
              <img src="{{asset('images/illustration/Pot2.svg')}}" class="mb-1" alt="svg img" />
              <h3>Diamond</h3>
              <p class="card-text">For small to medium businesses</p>
              <div class="annual-plan">
                <div class="plan-price mt-2">
                  <sup class="font-medium-1 fw-bold text-primary">$</sup>
                  <span class="pricing-standard-value fw-bolder text-primary">49</span>
                  <sub class="pricing-duration text-body font-medium-1 fw-bold">/month</sub>
                </div>
                <small class="annual-pricing d-none text-muted"></small>
              </div>
              <ul class="list-group list-group-circle text-start">
              <li class="list-group-item">100 instances</li>
                <li class="list-group-item">1000k Messages</li>
                <li class="list-group-item">100k Contacts</li>
                <li class="list-group-item">!00k Template Limit</li>
                <li class="list-group-item">Api allowed</li>
                <li class="list-group-item">Chatbot allowed</li>
                <li class="list-group-item">Bulk Messages allowed</li>
                <li class="list-group-item">Schedule Messages allowed</li>
                <li class="list-group-item">Allow Data Scraping</li>
                <li class="list-group-item">Allow Multi instances</li>
              </ul>
              <a href="subs/payment/diamond" class="btn w-100 btn-primary mt-2">Upgrade</a>
            </div>
          </div>
        </div>
        <!--/ standard plan -->

        <!-- enterprise plan -->
        <div class="col-12 col-md-4">
          <div class="card enterprise-pricing text-center">
            <div class="card-body">
              <img src="{{asset('images/illustration/Pot3.svg')}}" class="mb-2" alt="svg img" />
              <h3>Gold</h3>
              <p class="card-text">Solution for big organizations</p>
              <div class="annual-plan">
                <div class="plan-price mt-2">
                  <sup class="font-medium-1 fw-bold text-primary">$</sup>
                  <span class="pricing-enterprise-value fw-bolder text-primary">99</span>
                  <sub class="pricing-duration text-body font-medium-1 fw-bold">/month</sub>
                </div>
                <small class="annual-pricing d-none text-muted"></small>
              </div>
              <ul class="list-group list-group-circle text-start">
                <li class="list-group-item">100 instances</li>
                <li class="list-group-item">1000k Messages</li>
                <li class="list-group-item">100k Contacts</li>
                <li class="list-group-item">!00k Template Limit</li>
                <li class="list-group-item">Api allowed</li>
                <li class="list-group-item">Chatbot allowed</li>
                <li class="list-group-item">Bulk Messages allowed</li>
                <li class="list-group-item">Schedule Messages allowed</li>
                <li class="list-group-item">Allow Data Scraping</li>
                <li class="list-group-item">Allow Multi instances</li>
              </ul>
              <a href="subs/payment/gold" class="btn w-100 btn-outline-primary mt-2">Upgrade</a>
            </div>
          </div>
        </div>
        <!--/ enterprise plan -->
      </div>
    </div>
  </div>
  <!--/ pricing plan cards -->
</section>
@endsection

@section('page-script')
{{-- Page js files --}}
<script src="{{asset('js/scripts/pages/page-pricing.js')}}"></script>
@endsection
