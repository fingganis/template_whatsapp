@extends('layouts/contentLayoutMaster')

@section('title', 'Help Center - Pages')

<!-- Page -->
@section('page-style')
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-help-center.css')}}" />
@endsection

@section('content')
<!-- Popular Articles -->
<div class="help-center-popular-articles bg-help-center py-5">
    <div class="container-xl">
        <h3 class="text-center my-4">You're checking out for plan {{$id}}</h3>
        <div class="row">
            <div class="col-lg-10 mx-auto mb-4">
                <div class="row">
                    <div class="col-md-4 mb-md-0 mb-4">
                        <div class="card border shadow-none">
                            <div class="card-body text-center">
                                <img src="{{asset('images/icons/payments/visa.png')}}" class="mb-2 mt-5"
                                    alt="svg img" />

                                <h5 class="my-2">VISA</h5>


                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-md-0 mb-4">
                        <div class="card border shadow-none">
                            <div class="card-body text-center">
                                <img src="{{asset('images/icons/payments/mastercard-cc.png')}}" class="mb-2 mt-5"
                                    alt="svg img" />
                                <h5 class="my-2">Master Card</h5>


                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card border shadow-none">
                            <div class="card-body text-center">

                                <img src="{{asset('images/icons/payments/maestro-cc.png')}}" class="mb-2 mt-5"
                                    alt="svg img" />

                                <h5 class="my-2">Maestro CC</h5>


                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 mb-md-0 mb-4">
                        <div class="card border shadow-none">
                            <div class="card-body text-center">
                                <img src="{{asset('images/icons/payments/discover-cc.png')}}" class="mb-2 mt-5"
                                    alt="svg img" />

                                <h5 class="my-2">Discover CC</h5>


                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-md-0 mb-4">
                        <div class="card border shadow-none">
                            <div class="card-body text-center">
                                <img src="{{asset('images/icons/payments/jcb-cc.png')}}" class="mb-2 mt-5"
                                    alt="svg img" />
                                <h5 class="my-2">JCB CC</h5>


                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card border shadow-none">
                            <div class="card-body text-center">

                                <img src="{{asset('images/icons/payments/diners-cc.png')}}" class="mb-2 mt-5"
                                    alt="svg img" />

                                <h5 class="my-2">Diners CC</h5>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection