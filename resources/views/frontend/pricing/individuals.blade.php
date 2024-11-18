@extends('layouts.frontend')
@section('content')
<div class="rbt-breadcrumb-default ptb--100 ptb_md--50 ptb_sm--30 bg-gradient-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-inner text-center">
                    <h2 class="title">Individuals</h2>
                    <ul class="page-list">
                        <li class="rbt-breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li>
                            <div class="icon-right"><i class="feather-chevron-right"></i></div>
                        </li>
                        <li class="rbt-breadcrumb-item active">Individuals Pricing</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="rbt-pricing-area bg-color-white rbt-section-gap">
    <div class="container">
        <div class="row g-5 mb--60">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="section-title text-start">
                    <span class="subtitle bg-primary-opacity"> PRICING</span>
                    {{-- <h2 class="title">Style One</h2> --}}
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12">
                <div class="pricing-billing-duration text-start text-md-end">
                    <ul>
                        <li class="nav-item">
                            <button class="nav-link yearly-plan-btn" type="button">Yearly Plan</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link monthly-plan-btn active" type="button">Monthly Plan</button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row g-5">
            <!-- Start Single Pricing  -->

            
            @foreach ($allMonthly as $subscription)
            <div class="col-xl-4 col-lg-6 col-md-6 col-12 monthly-pricing">
                <div class="pricing-table">
                    <div class="pricing-header">
                        <h3 class="title">{{ $subscription->title }}</h3>
                        <span class="rbt-badge mb--35">{{ $subscription->sub_title }}</span>
                        <div class="price-wrap">
                            {{-- <div class="yearly-pricing" style="display: none;">
                                <span class="amount">£{{ $subscription->yearly_price }}</span>
                                <span class="duration">/yearly</span>
                            </div> --}}
                            <div class="" style="display: block;">
                                <span class="amount">£{{ $subscription->price }} </span>
                                <span class="duration">/monthly</span>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-body">
                        <ul class="list-item">
                            @foreach (json_decode($subscription->access_details) as $access)
                                <li><i class="feather-check"></i> {{ $access ?? '' }}</li>
                            @endforeach
                            
                     
                        </ul>
                    </div>
                    <div class="pricing-btn">
                        <a class="rbt-btn bg-primary-opacity hover-icon-reverse w-100" href="{{ route('plan.checkout', ['plan' => $subscription->id]) }}">
                            <div class="icon-reverse-wrapper">
                                <span class="btn-text">Purchase Plan</span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
            @foreach ($allYearly as $subscription)
            <div class="col-xl-4 col-lg-6 col-md-6 col-12 yearly-pricing">
                <div class="pricing-table">
                    <div class="pricing-header">
                        <h3 class="title">{{ $subscription->title }}</h3>
                        <span class="rbt-badge mb--35">{{ $subscription->sub_title }}</span>
                        <div class="price-wrap">
                            <div class="" style="">
                                <span class="amount">£{{ $subscription->price }}</span>
                                <span class="duration">/yearly</span>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-body">
                        <ul class="list-item">
                            @foreach (json_decode($subscription->access_details) as $access)
                                <li><i class="feather-check"></i> {{ $access ?? '' }}</li>
                            @endforeach
                            
                     
                        </ul>
                    </div>
                    <div class="pricing-btn">
                        <a class="rbt-btn bg-primary-opacity hover-icon-reverse w-100" href="{{ route('plan.checkout', ['plan' => $subscription->id]) }}">
                            <div class="icon-reverse-wrapper">
                                <span class="btn-text">Purchase Plan</span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach


            <!-- End Single Pricing  -->

            <!-- Start Single Pricing  -->
            {{-- <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                <div class="pricing-table active">
                    <div class="pricing-header">
                        <h3 class="title">Standard Plan</h3>
                        <span class="rbt-badge mb--35">Most Popular</span>
                        <div class="price-wrap">
                            <div class="yearly-pricing" style="display: none;">
                                <span class="amount">$100.99</span>
                                <span class="duration">/yearly</span>
                            </div>
                            <div class="monthly-pricing" style="display: block;">
                                <span class="amount">$20.00</span>
                                <span class="duration">/monthly</span>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-body">
                        <ul class="list-item">
                            <li><i class="feather-check"></i> Unlimited Access Courses</li>
                            <li><i class="feather-check"></i> Certificate After Completion</li>
                            <li><i class="feather-check"></i> High Resolution Videos</li>
                            <li><i class="feather-check"></i> 24/7 Dedicated Support</li>
                        </ul>
                    </div>
                    <div class="pricing-btn">
                        <a class="rbt-btn hover-icon-reverse w-100" href="#">
                            <div class="icon-reverse-wrapper">
                                <span class="btn-text">Join Course Plan</span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                            </div>
                        </a>
                    </div>
                </div>
            </div> --}}
            <!-- End Single Pricing  -->

            <!-- Start Single Pricing  -->
            {{-- <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                <div class="pricing-table">
                    <div class="pricing-header">
                        <h3 class="title">Exclusive Plan</h3>
                        <span class="rbt-badge mb--35">Free for a Month</span>
                        <div class="price-wrap">
                            <div class="yearly-pricing" style="display: none;">
                                <span class="amount">$99.99</span>
                                <span class="duration">/yearly</span>
                            </div>
                            <div class="monthly-pricing" style="display: block;">
                                <span class="amount">$39.00</span>
                                <span class="duration">/monthly</span>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-body">
                        <ul class="list-item">
                            <li><i class="feather-check"></i> Unlimited Access Courses</li>
                            <li><i class="feather-check"></i> Certificate After Completion</li>
                            <li><i class="feather-check"></i> High Resolution Videos</li>
                            <li><i class="feather-check"></i> 24/7 Dedicated Support</li>
                        </ul>
                    </div>
                    <div class="pricing-btn">
                        <a class="rbt-btn bg-primary-opacity hover-icon-reverse w-100" href="#">
                            <div class="icon-reverse-wrapper">
                                <span class="btn-text">Join Course Plan</span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                            </div>
                        </a>
                    </div>
                </div>
            </div> --}}
            <!-- End Single Pricing  -->
        </div>
    </div>
</div>


@endsection