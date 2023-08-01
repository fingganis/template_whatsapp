@extends('layouts/contentLayoutMaster')

@section('title', 'Dashboard Ecommerce')

@section('vendor-style')
{{-- vendor css files --}}
<link rel="stylesheet" href="{{ asset(mix('vendors/css/charts/apexcharts.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('vendors/css/extensions/toastr.min.css')) }}">
@endsection
@section('page-style')
{{-- Page css files --}}
<link rel="stylesheet" href="{{ asset(mix('css/base/pages/dashboard-ecommerce.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('css/base/plugins/charts/chart-apex.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('css/base/plugins/extensions/ext-component-toastr.css')) }}">
@endsection

@section('content')
<!-- Dashboard Ecommerce Starts -->
<section id="dashboard-ecommerce">
    <div class="row match-height">
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="card card-congratulations">
                <div class="card-body text-center">
                    <img src="{{asset('images/elements/decore-left.png')}}" class="congratulations-img-left"
                        alt="card-img-left" />
                    <img src="{{asset('images/elements/decore-right.png')}}" class="congratulations-img-right"
                        alt="card-img-right" />
                    <div class="avatar avatar-xl bg-primary shadow">
                        <div class="avatar-content" style="background: white;">
                            <img src="{{asset('images/illustration/badge.svg')}}" alt="Medal Pic" height="170" />
                        </div>
                    </div>
                    <div class="text-center">
                        <h1 class="mb-1 text-white">CURRENT PLANT</h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- Statistics Card -->
        <div class="col-xl-8 col-md-6 col-12">
            <div class="card card-statistics">
                <div class="card-header">
                    <h4 class="card-title">Statistics</h4>
                    <div class="d-flex align-items-center">
                        <p class="card-text font-small-2 me-25 mb-0">Updated 1 month ago</p>
                    </div>
                </div>
                <div class="card-body statistics-body">
                    <div class="row">
                        <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                            <div class="d-flex flex-row">
                                <div class="avatar bg-light-primary me-2">
                                    <div class="avatar-content">
                                        <i data-feather="trending-up" class="avatar-icon"></i>
                                    </div>
                                </div>
                                <div class="my-auto">
                                    <h4 class="fw-bolder mb-0">0</h4>
                                    <p class="card-text font-small-3 mb-0">Contacts</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                            <div class="d-flex flex-row">
                                <div class="avatar bg-light-info me-2">
                                    <div class="avatar-content">
                                        <i data-feather="user" class="avatar-icon"></i>
                                    </div>
                                </div>
                                <div class="my-auto">
                                    <h4 class="fw-bolder mb-0">8.549k</h4>
                                    <p class="card-text font-small-3 mb-0">Live Intances</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-sm-0">
                            <div class="d-flex flex-row">
                                <div class="avatar bg-light-danger me-2">
                                    <div class="avatar-content">
                                        <i data-feather="box" class="avatar-icon"></i>
                                    </div>
                                </div>
                                <div class="my-auto">
                                    <h4 class="fw-bolder mb-0">1.423k</h4>
                                    <p class="card-text font-small-3 mb-0">Live Bots</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 col-sm-6 col-12">
                            <div class="d-flex flex-row">
                                <div class="avatar bg-light-success me-2">
                                    <div class="avatar-content">
                                        <i data-feather="dollar-sign" class="avatar-icon"></i>
                                    </div>
                                </div>
                                <div class="my-auto">
                                    <h4 class="fw-bolder mb-0">$9745</h4>
                                    <p class="card-text font-small-3 mb-0">Messages Left</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 col-12">
                            <div class="d-flex flex-row">
                                <div class="avatar bg-light-success me-2">
                                    <div class="avatar-content">
                                        <i data-feather="dollar-sign" class="avatar-icon"></i>
                                    </div>
                                </div>
                                <div class="my-auto">
                                    <h4 class="fw-bolder mb-0">$9745</h4>
                                    <p class="card-text font-small-3 mb-0">Total Template</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 col-12">
                            <div class="d-flex flex-row">
                                <div class="avatar bg-light-success me-2">
                                    <div class="avatar-content">
                                        <i data-feather="dollar-sign" class="avatar-icon"></i>
                                    </div>
                                </div>
                                <div class="my-auto">
                                    <h4 class="fw-bolder mb-0">$9745</h4>
                                    <p class="card-text font-small-3 mb-0">Pending Pings</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Statistics Card -->
    </div>
    <div class="col-lg-12 col-md-12 col-12">
        <div class="card card-transaction">
            <div class="card-header">
                <h4 class="card-title">Feature Active</h4>
                <div class="dropdown chart-dropdown">
                    <i data-feather="more-vertical" class="font-medium-3 cursor-pointer" data-bs-toggle="dropdown"></i>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="#">Last 28 Days</a>
                        <a class="dropdown-item" href="#">Last Month</a>
                        <a class="dropdown-item" href="#">Last Year</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="transaction-item">
                    <div class="d-flex">
                        <div class="transaction-percentage">
                            <h6 class="transaction-title">Api Access</h6>
                            <small>Yes</small>
                        </div>
                    </div>
                    <div class="fw-bolder text-success">
                        <div class="avatar bg-light-success rounded float-start">
                            <div class="avatar-content">
                                <i data-feather="check" class="avatar-icon font-medium-3"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="transaction-item">
                    <div class="d-flex">
                        <div class="transaction-percentage">
                            <h6 class="transaction-title">Allow Data Scraping</h6>
                            <small>Yes</small>
                        </div>
                    </div>
                    <div class="fw-bolder text-success">
                        <div class="avatar bg-light-success rounded float-start">
                            <div class="avatar-content">
                                <i data-feather="check" class="avatar-icon font-medium-3"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="transaction-item">
                    <div class="d-flex">
                        <div class="transaction-percentage">
                            <h6 class="transaction-title">Campaign With Multiple Instance</h6>
                            <small>Yes</small>
                        </div>
                    </div>
                    <div class="fw-bolder text-success">
                        <div class="avatar bg-light-success rounded float-start">
                            <div class="avatar-content">
                                <i data-feather="check" class="avatar-icon font-medium-3"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="transaction-item">
                    <div class="d-flex">
                        <div class="transaction-percentage">
                            <h6 class="transaction-title">Scrapping Allowed</h6>
                            <small>Yes</small>
                        </div>
                    </div>
                    <div class="fw-bolder text-success">
                        <div class="avatar bg-light-success rounded float-start">
                            <div class="avatar-content">
                                <i data-feather="check" class="avatar-icon font-medium-3"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="transaction-item">
                    <div class="d-flex">
                        <div class="transaction-percentage">
                            <h6 class="transaction-title">Allowed Template</h6>
                            <small>Yes</small>
                        </div>
                    </div>
                    <div class="fw-bolder text-success">
                        <div class="avatar bg-light-success rounded float-start">
                            <div class="avatar-content">
                                <i data-feather="check" class="avatar-icon font-medium-3"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- Dashboard Ecommerce ends -->
@endsection

@section('vendor-script')
{{-- vendor files --}}
<script src="{{ asset(mix('vendors/js/charts/apexcharts.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/extensions/toastr.min.js')) }}"></script>
@endsection
@section('page-script')
{{-- Page js files --}}
<script src="{{ asset(mix('js/scripts/pages/dashboard-ecommerce.js')) }}"></script>
@endsection