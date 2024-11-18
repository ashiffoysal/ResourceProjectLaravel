@extends('layouts.frontend')
@section('content')
<div class="rbt-page-banner-wrapper">
    <!-- Start Banner BG Image  -->
    <div class="rbt-banner-image"></div>
    <!-- End Banner BG Image  -->
</div>
<div class="rbt-dashboard-area rbt-section-overlayping-top rbt-section-gapBottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Start Dashboard Top  -->
                <div class="rbt-dashboard-content-wrapper">
                  
                    <!-- Start Tutor Information  -->
                    @include('frontend.dashboard.include.header')
                    <!-- End Tutor Information  -->
                </div>
                <!-- End Dashboard Top  -->
                <div class="row g-5">
                    <div class="col-lg-3">
                        <!-- Start Dashboard Sidebar  -->
                        <div class="rbt-default-sidebar sticky-top rbt-shadow-box rbt-gradient-border">
                            <div class="inner">
                                <div class="content-item-content">
                                        {{-- 
                                    <div class="rbt-default-sidebar-wrapper">
                                        <div class="section-title mb--20">
                                            <h6 class="rbt-title-style-2">Welcome, Jone Due</h6>
                                        </div>
                                        <nav class="mainmenu-nav">
                                            <ul class="dashboard-mainmenu rbt-default-sidebar-list">
                                                <li><a href="instructor-dashboard.html"><i
                                                            class="feather-home"></i><span>Dashboard</span></a></li>
                                                <li><a href="instructor-profile.html"><i
                                                            class="feather-user"></i><span>My Profile</span></a>
                                                </li>
                                                <li><a href="instructor-enrolled-courses.html"><i
                                                            class="feather-book-open"></i><span>Enrolled
                                                            Courses</span></a></li>
                                                <li><a href="instructor-wishlist.html"><i
                                                            class="feather-bookmark"></i><span>Wishlist</span></a>
                                                </li>
                                                <li><a href="instructor-reviews.html"><i
                                                            class="feather-star"></i><span>Reviews</span></a></li>
                                                <li><a href="instructor-my-quiz-attempts.html"><i
                                                            class="feather-help-circle"></i><span>My Quiz
                                                            Attempts</span></a></li>
                                                <li><a href="instructor-order-history.html"><i
                                                            class="feather-shopping-bag"></i><span>Order
                                                            History</span></a></li>
                                            </ul>
                                        </nav>

                                        <div class="section-title mt--40 mb--20">
                                            <h6 class="rbt-title-style-2">Instructor</h6>
                                        </div>

                                        <nav class="mainmenu-nav">
                                            <ul class="dashboard-mainmenu rbt-default-sidebar-list">
                                                <li><a href="instructor-course.html"><i
                                                            class="feather-monitor"></i><span>My Courses</span></a>
                                                </li>
                                                <li><a href="instructor-announcements.html"><i
                                                            class="feather-volume-2"></i><span>Announcements</span></a>
                                                </li>
                                                <li><a href="instructor-quiz-attempts.html"><i
                                                            class="feather-message-square"></i><span>Quiz
                                                            Attempts</span></a></li>
                                                <li><a href="instructor-assignments.html"><i
                                                            class="feather-list"></i><span>Assignments</span></a>
                                                </li>
                                            </ul>
                                        </nav>

                                        <div class="section-title mt--40 mb--20">
                                            <h6 class="rbt-title-style-2">User</h6>
                                        </div>

                                        <nav class="mainmenu-nav">
                                            <ul class="dashboard-mainmenu rbt-default-sidebar-list">
                                                <li><a href="instructor-settings.html"><i
                                                            class="feather-settings"></i><span>Settings</span></a>
                                                </li>
                                                <li><a href="index.html"><i
                                                            class="feather-log-out"></i><span>Logout</span></a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                      --}}
                                    @include('frontend.dashboard.include.menu')

                                </div>
                            </div>
                        </div>
                        <!-- End Dashboard Sidebar  -->
                    </div>
                    <div class="col-lg-9">
                        <!-- Start Instructor Profile  -->
                        <div class="rbt-dashboard-content bg-color-white rbt-shadow-box">
                            <div class="content">

                                <div class="section-title">
                                    <h4 class="rbt-title-style-3">Settings</h4>
                                </div>

                                <div class="advance-tab-button mb--30">
                                    <ul class="nav nav-tabs tab-button-style-2 justify-content-start"
                                        id="settinsTab-4" role="tablist">
                                        <li role="presentation">
                                            <a href="#" class="tab-button active" id="profile-tab"
                                                data-bs-toggle="tab" data-bs-target="#profile" role="tab"
                                                aria-controls="profile" aria-selected="true">
                                                <span class="title">Profile</span>
                                            </a>
                                        </li>
                                        <li role="presentation">
                                            <a href="#" class="tab-button" id="password-tab" data-bs-toggle="tab"
                                                data-bs-target="#password" role="tab" aria-controls="password"
                                                aria-selected="false">
                                                <span class="title">Password</span>
                                            </a>
                                        </li>
                                        {{-- <li role="presentation">
                                            <a href="#" class="tab-button" id="social-tab" data-bs-toggle="tab"
                                                data-bs-target="#social" role="tab" aria-controls="social"
                                                aria-selected="false">
                                                <span class="title">Social Share</span>
                                            </a>
                                        </li> --}}
                                    </ul>
                                </div>

                                <div class="tab-content">
                                    <div class="tab-pane fade active show" id="profile" role="tabpanel"
                                        aria-labelledby="profile-tab">
                                     
                                        <!-- Start Profile Row  -->
                                        <form action="{{ url('/profile') }}" class="rbt-profile-row rbt-default-form row row--15" method="POST">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div class="rbt-form-group">
                                                    @csrf
                                                    <label for="firstname">Name</label>
                                                    <input id="firstname" name="name" type="text" value="{{ Auth::user()->name }}">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div class="rbt-form-group">
                                                    <label for="phonenumber">Email</label>
                                                    <input id="phonenumber" name="email"  type="email" value="{{ Auth::user()->email }}">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="rbt-form-group">
                                                    <label for="phonenumber">Phone Number</label>
                                                    <input id="phonenumber" type="text" name="phone"  value="{{ Auth::user()->phone }}">
                                                </div>
                                            </div>
                                            
                                            <div class="col-12">
                                                <div class="rbt-form-group">
                                                    <label for="bio">Bio</label>
                                                    <textarea id="bio" name="bio" cols="20" rows="5">{{ Auth::user()->bio }} </textarea>
                                                </div>
                                            </div>
                                            <div class="col-12 mt--20">
                                                <div class="rbt-form-group">
                                                    <button type="submit" class="rbt-btn btn-gradient" href="#">Update Info</button>
                                                </div>
                                            </div>
                                        </form>
                                        <!-- End Profile Row  -->
                                    </div>

                                    <div class="tab-pane fade" id="password" role="tabpanel"
                                        aria-labelledby="password-tab">
                                        <!-- Start Profile Row  -->
                                        <form action="{{ url('profile-password-update') }}" class="rbt-profile-row rbt-default-form row row--15" method="POST">
                                            <div class="col-12">
                                                <div class="rbt-form-group">
                                                    @csrf
                                                    <label for="currentpassword">Current Password</label>
                                                    <input id="currentpassword" type="password"
                                                        placeholder="Current Password" name="old_password">
                                                        @error('old_password')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="rbt-form-group">
                                                    <label for="newpassword">New Password</label>
                                                    <input id="newpassword" type="password"
                                                        placeholder="New Password" name="password">
                                                        @error('password')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="rbt-form-group">
                                                    <label for="retypenewpassword">Re-type New Password</label>
                                                    <input id="retypenewpassword" type="password"
                                                        placeholder="Re-type New Password" name="password_confirmation">
                                                        @error('confirmed')
                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                </div>
                                            </div>
                                            <div class="col-12 mt--10">
                                                <div class="rbt-form-group">
                                                    <button type="submit" class="rbt-btn btn-gradient" href="#">Update Password</button>
                                                </div>
                                            </div>
                                        </form>
                                        <!-- End Profile Row  -->
                                    </div>

                                    <div class="tab-pane fade" id="social" role="tabpanel"
                                        aria-labelledby="social-tab">
                                        <!-- Start Profile Row  -->
                                        <form action="#" class="rbt-profile-row rbt-default-form row row--15">
                                       
                                     
                                            <div class="col-12">
                                                <div class="rbt-form-group">
                                                    <label for="linkedin"><i class="feather-linkedin"></i>
                                                        Linkedin</label>
                                                    <input id="linkedin" type="text"
                                                        placeholder="https://linkedin.com/">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="rbt-form-group">
                                                    <label for="website"><i class="feather-globe"></i>
                                                        Website</label>
                                                    <input id="website" type="text"
                                                        placeholder="https://website.com/">
                                                </div>
                                            </div>
                                           
                                            <div class="col-12 mt--10">
                                                <div class="rbt-form-group">
                                                    <a class="rbt-btn btn-gradient" href="#">Update Profile</a>
                                                </div>
                                            </div>
                                        </form>
                                        <!-- End Profile Row  -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Instructor Profile  -->

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection