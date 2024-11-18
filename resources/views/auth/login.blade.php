@extends('layouts.frontend')
@section('content')
    <!-- Start breadcrumb Area -->
<div class="rbt-breadcrumb-default ptb--100 ptb_md--50 ptb_sm--30 bg-gradient-1">
    <div class="container ">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-inner text-center">
                    <h2 class="title">Login</h2>
                    <ul class="page-list">
                        <li class="rbt-breadcrumb-item"><a href="index.html">Home</a></li>
                        <li>
                            <div class="icon-right"><i class="feather-chevron-right"></i></div>
                        </li>
                        <li class="rbt-breadcrumb-item active">Login</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="rbt-elements-area bg-color-white rbt-section-gap">
    <div class="container justify-content-center">
        <div class="row gy-5 row--30">
            <div class="offset-2 col-lg-8">
                <div class="rbt-contact-form contact-form-style-1 max-width-auto">
                    <h3 class="title">Login</h3>
                        <form  class="max-width-auto" method="POST" action="{{ route('login') }}">
                        <div class="form-group">
                            <input name="email" type="text" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />
                            @csrf
                            <label>Username or email *</label>
                            <span class="focus-border"></span>
                        </div>
                        <div class="form-group">
                            <input name="password" type="password" class="form-control @error('password') is-invalid @enderror">
                            <label>Password *</label>
                            <span class="focus-border"></span>
                        </div>

                        <div class="row mb--30">
                            <div class="col-lg-6">
                                <div class="rbt-checkbox">
                                    <input type="checkbox" id="rememberme" name="rememberme">
                                    <label for="rememberme">Remember me</label>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="rbt-lost-password text-end">
                                    <a class="rbt-btn-link" href="#">Lost your password?</a>
                                </div>
                            </div>
                        </div>

                        <div class="form-submit-group">
                            <button type="submit" class="rbt-btn btn-md btn-gradient hover-icon-reverse w-100">
                                <span class="icon-reverse-wrapper">
                                    <span class="btn-text">Log In</span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                </span>
                            </button>
                        </div>
                    </form>
                    <div class="max-width-auto google-login-button mt-5 form-submit-group text-center">
                        <a href="{{ url('auth/google') }}" class="login-with-google-btn">
                            Login with Google
                          </a>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
@endsection
