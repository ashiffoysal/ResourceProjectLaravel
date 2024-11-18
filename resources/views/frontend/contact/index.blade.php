@extends('layouts.frontend')
@section('content')

<div class="rbt-conatct-area bg-gradient-11 rbt-section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center mb--60">
                    <span class="subtitle bg-secondary-opacity">Contact Us</span>
                    <h2 class="title">Histudy Course Contact <br> can join with us.</h2>
                </div>
            </div>
        </div>
        <div class="row g-5">
            <div class="col-lg-4 col-md-6 col-sm-6 col-12 sal-animate" data-sal="slide-up" data-sal-delay="150"
                data-sal-duration="800">
                <div class="rbt-address">
                    <div class="icon">
                        <i class="feather-headphones"></i>
                    </div>
                    <div class="inner">
                        <h4 class="title">Contact Phone Number</h4>
                        <p><a href="tel:+444555666777">{{ $companyInformation->mobile }}</a></p>
                        {{-- <p><a href="tel:+222222222333">+222 222 222 333</a></p> --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12 sal-animate" data-sal="slide-up" data-sal-delay="200"
                data-sal-duration="800">
                <div class="rbt-address">
                    <div class="icon">
                        <i class="feather-mail"></i>
                    </div>
                    <div class="inner">
                        <h4 class="title">Our Email Address</h4>
                        <p><a href="mailto:admin@gmail.com">{{ $companyInformation->email }}</a></p>
                        {{-- <p><a href="mailto:example@gmail.com">example@gmail.com</a></p> --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12 sal-animate" data-sal="slide-up" data-sal-delay="250"
                data-sal-duration="800">
                <div class="rbt-address">
                    <div class="icon">
                        <i class="feather-map-pin"></i>
                    </div>
                    <div class="inner">
                        <h4 class="title">Our Location</h4>
                        <p>5678 Bangla Main Road, cities 580 <br> GBnagla, example 54786</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="rbt-contact-address">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6">
                <div class="thumbnail">
                    <img class="w-100 radius-6" src="{{ asset('frontend') }}/assets/images/about/contact.jpg" alt="Contact Images">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="rbt-contact-form contact-form-style-1 max-width-auto">
                    <div class="section-title text-start">
                        <span class="subtitle bg-primary-opacity">EDUCATION FOR EVERYONE</span>
                    </div>
                    <h3 class="title">Get a Free Course You Can Contact With Me</h3>
                    <form  method="POST" action="{{ url('/contact') }}"
                        class=" max-width-auto">
                        <div class="form-group">
                            @csrf
                            <input  name="name" id="contact-name" type="text">
                            <label>Name</label>
                            <span class="focus-border"></span>
                            @if ($errors->has('name'))
                                <span class="required">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <input name="email"  type="email">
                            <label>Email</label>
                            <span class="focus-border"></span>
                            @if ($errors->has('email'))
                                <span class="required">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="text" id="" name="phone">
                            <label>Phone</label>
                            <span class="focus-border"></span>
                            @if ($errors->has('phone'))
                                <span class="required">{{ $errors->first('phone') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="text" id="subject" name="subject">
                            <label>Your Subject</label>
                            <span class="focus-border"></span>
                            @if ($errors->has('subject'))
                                <span class="required">{{ $errors->first('subject') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <textarea name="message" id="contact-message"></textarea>
                            <label>Message</label>
                            <span class="focus-border"></span>
                            @if ($errors->has('message'))
                                <span class="required">{{ $errors->first('message') }}</span>
                            @endif
                        </div>
                        <div class="form-submit-group">
                            <button type="submit" class="rbt-btn btn-md btn-gradient hover-icon-reverse w-100">
                                <span class="icon-reverse-wrapper">
                                    <span class="btn-text">GET IT NOW</span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                </span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection