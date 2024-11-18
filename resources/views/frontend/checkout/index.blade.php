@extends('layouts.frontend')
@section('content')

<div class="rbt-breadcrumb-default ptb--100 ptb_md--50 ptb_sm--30 bg-gradient-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-inner text-center">
                    <h2 class="title">Checkout</h2>
                    <ul class="page-list">
                        <li class="rbt-breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li>
                            <div class="icon-right"><i class="feather-chevron-right"></i></div>
                        </li>
                        <li class="rbt-breadcrumb-item active">Checkout</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb Area -->

<div class="checkout_area bg-color-white rbt-section-gap">
    <div class="container">
        <form action="{{ url('/purchase') }}" method="post">
            @csrf
            <div class="row g-5 checkout-form">
            
                <div class="col-lg-7">
                    <div class="checkout-content-wrapper">

                        <!-- Billing Address -->
                        <div id="billing-form">
                            <h4 class="checkout-title">Billing Address</h4>

                            <div class="row">
                                <div class="col-md-12 col-12">
                                    <label>First Name*</label>
                                    <input type="text" placeholder="First Name" value="{{ Auth::user()->name }}" required> 
                                </div>

                                <div class="col-md-6 col-12">
                                    <label>Email Address*</label>
                                    <input type="email" placeholder="Email Address" value="{{ Auth::user()->email }}" required>
                                </div>

                                <div class="col-md-6 col-12">
                                    <label>Phone no*</label>
                                    <input type="text" placeholder="Phone number" value="{{ Auth::user()->phone }}" required>
                                </div>
                            </div>
                        </div>

                        <!-- Shipping Address -->
                        

                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="row pl--50 pl_md--0 pl_sm--0">
                        <!-- Cart Total -->
                        <div class="col-12 mb--60">

                            {{-- <h4 class="checkout-title">Total</h4> --}}

                            <div class="checkout-cart-total">

                                <h4>Subscription Plan:<span>{{ $subscription->title }}</span></h4>
                                <ul>
                                    @foreach (json_decode($subscription->access_details) as $details)
                                        <li>{{ $details }}</li>
                                    @endforeach
                                    
                                </ul>
                                <h4 class="mt--30">Grand Total <span>£ {{ $subscription->price }} / @if($subscription->subscription_type==1) Monthly @else Yearly @endif </span></h4>

                            </div>

                        </div>

                        <!-- Payment Method -->
                        <div class="col-12 mb--60">
                            <h4 class="checkout-title">Payment Method</h4>
                            <div class="checkout-payment-method">

                                <div class="single-method">
                                    <input type="radio" id="payment_check" name="payment-method" value="check">
                                    <label for="payment_check">Card Payment</label>
                                </div>
                        
                                <div class="single-method">
                                    <input type="checkbox" id="accept_terms">
                                    <label for="accept_terms">I’ve read and accept the <a target="__blank" style="color: #0d6efd" href="{{ url('terms-condition') }}">terms &
                                        conditions<a></label>
                                </div>
                            </div>
                            <div class="plceholder-button mt--50">
                                <button class="rbt-btn btn-gradient hover-icon-reverse">
                                    <span class="icon-reverse-wrapper">
                                        <span class="btn-text">Place order</span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
        
            </div>
        </form>
    </div>
</div>

@endsection