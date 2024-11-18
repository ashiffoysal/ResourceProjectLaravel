@extends('layouts.frontend')
@section('content')
<div class="slider-area rbt-banner-5 height-750 bg_image bg_image--3" data-gradient-overlay="7">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner text-center">
                    <h1 class="title display-one">
                        Examiner-crafted  
                        <span> revision resources&amp; </span>
                        <span> designed to double your grades.
                        </span>
                    </h1>
                    <p class="description">Merithub offers a seamless, stress-free study platform that empowers students to learn efficiently and achieve their academic goals.</p>
                    <div class="rbt-button-group">
                        {{-- <a class="rbt-btn btn-white hover-icon-reverse" href="#">
                            <div class="icon-reverse-wrapper">
                                <span class="btn-text">View Our Program</span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                            </div>
                        </a> --}}
                        <a class="rbt-btn btn-border hover-icon-reverse color-white" href="contact.html">
                            <div class="icon-reverse-wrapper">
                                <span class="btn-text">Contact Us</span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="rbt-about-area about-style-1 bg-color-white rbt-section-gap">
    <div class="container">
        <div class="row g-5 align-items-start">
            <div class="col-lg-6">
                <div class="content">
                    <h2 class="title mb--0" data-sal="slide-up" data-sal-duration="700">Revision resources created by examiners to help double your grades</h2>
                </div>
            </div>
            <div class="col-lg-6" data-sal="slide-up" data-sal-duration="700">
                <p class="mb--40 mb_sm--20">Our examiner-crafted revision resources are specifically designed to help you improve your grades and maximize your exam performance. These resources are created by experienced examiners who understand exactly what is needed to succeed in your exams. With focused content, tips, and practice materials, you'll have everything you need to prepare effectively and efficiently. Whether you're aiming to revise key concepts or tackle challenging topics, these resources will guide you every step of the way. Start using our expert-designed revision tools today and double your chances of achieving top grades in your upcoming exams.</p>
                <div class="readmore-btn">
                    <a class="rbt-moderbt-btn" href="{{ url('/shop') }}">
                        <span class="moderbt-btn-text">Resources</span>
                        <i class="feather-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="rbt-advance-tab-area bg-gradient-2 rbt-section-gapTop">
    <div class="container">
        <div class="row mb--40">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <span class="subtitle bg-secondary-opacity">Status</span>
                    <h2 class="title">Overview.</h2>
                </div>
            </div>
        </div>
        <div class="row g-5">
            <div class="col-lg-10 offset-lg-1">
                <div class="advance-tab-button">
                    <ul class="nav nav-tabs tab-button-style-2" id="myTab-4" role="tablist">
                        <li role="presentation">
                            <a href="#" class="tab-button" id="home-tab-4" data-bs-toggle="tab"
                                data-bs-target="#home-4" role="tab" aria-controls="home-4" aria-selected="false">
                                <span class="title">History</span>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#" class="tab-button active" id="profile-tab-4" data-bs-toggle="tab"
                                data-bs-target="#profile-4" role="tab" aria-controls="profile-4"
                                aria-selected="true">
                                <span class="title">Mission</span>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#" class="tab-button" id="contact-tab-4" data-bs-toggle="tab"
                                data-bs-target="#contact-4" role="tab" aria-controls="contact-4"
                                aria-selected="false">
                                <span class="title">Vission</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-10 offset-lg-1">
                <div class="tab-content advance-tab-content-style-2">
                    <div class="tab-pane fade" id="home-4" role="tabpanel" aria-labelledby="home-tab-4">
                        <div class="content">
                            <p>Our revision resources are developed by experienced examiners with a deep understanding of exam patterns and expectations. Over time, we’ve refined our materials to ensure they address the most important concepts and challenges students face. With a focus on clarity and exam relevance, these resources have been continuously improved to provide the best possible preparation. Years of feedback and expertise have shaped these tools to help students excel, boosting their grades and enhancing their confidence for success in exams.</p>
                        </div>
                    </div>
                    <div class="tab-pane fade active show" id="profile-4" role="tabpanel"
                        aria-labelledby="profile-tab-4">
                        <div class="content">
                            <p>Our mission is to provide students with high-quality, examiner-crafted revision resources that empower them to achieve their academic potential. We strive to create effective, accessible tools that help students master key concepts, improve their exam techniques, and boost their confidence to succeed.</p>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="contact-4" role="tabpanel" aria-labelledby="contact-tab-4">
                        <div class="content">
                            <p>Our vision is to be the leading provider of revision resources that transform how students approach their studies. We aim to revolutionize exam preparation, making it easier for every student to achieve top grades and unlock their full academic potential, regardless of their background or challenges.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-5 mt--40">
            <div class="col-lg-6">
                <div class="rbt-category-gallery">
                    <div class="thumbnail">
                        <a href="#">
                            <img src="{{ asset('frontend') }}/assets/images/gallery/7.webp" alt="Gallery Images">
                        </a>
                        <div class="rbt-bg-overlay"></div>
                        <div class="hover-content">
                            <h3 class="title">Exam Centre London</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="rbt-category-gallery">
                    <div class="thumbnail">
                        <a href="#">
                            <img src="{{ asset('frontend') }}/assets/images/gallery/7.webp" alt="Gallery Images">
                        </a>
                        <div class="rbt-bg-overlay"></div>
                        <div class="hover-content">
                            <h3 class="title">MeritHub</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="row g-5">
                    <div class="col-lg-6">
                        <div class="rbt-category-gallery">
                            <div class="thumbnail">
                                <a href="#">
                                    <img src="{{ asset('frontend') }}/assets/images/gallery/8.webp" alt="Gallery Images">
                                </a>
                                <div class="rbt-bg-overlay"></div>
                                <div class="hover-content">
                                    <h3 class="title">MeritHub</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <div class="col-lg-6">
                        <div class="rbt-category-gallery">
                            <div class="thumbnail">
                                <a href="#">
                                    <img src="{{ asset('frontend') }}/assets/images/gallery/9.webp" alt="Gallery Images">
                                </a>
                                <div class="rbt-bg-overlay"></div>
                                <div class="hover-content">
                                    <h3 class="title">MeritHub</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                  
                </div>
            </div>
        </div>
    </div>
</div>

<div class="rbt-counterup-area bg-color-white rbt-section-gapTop">
    <div class="container">
        <div class="row g-5">
            <!-- Start Single Counter  -->
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="rbt-counterup style-3">
                    <div class="inner">
                        <div class="content">
                            <h2 class="counter"><span class="odometer" data-count="500">00</span>
                            </h2>
                            <span class="subtitle">Learners &amp; counting</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Counter  -->

            <!-- Start Single Counter  -->
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="rbt-counterup style-3">
                    <div class="inner">
                        <div class="content">
                            <h2 class="counter"><span class="odometer" data-count="800">00</span>
                            </h2>
                            <span class="subtitle">Courses & Video</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Counter  -->

            <!-- Start Single Counter  -->
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="rbt-counterup style-3">
                    <div class="inner">
                        <div class="content">
                            <h2 class="counter"><span class="odometer" data-count="1000">00</span>
                            </h2>
                            <span class="subtitle">Certified Students</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Counter  -->
        </div>
    </div>
</div>

<div class="rbt-split-area bg-color-white overflow-hidden rbt-section-gapTop">
    <div class="wrapper">
        <div class="rbt-splite-style">
            <div class="split-wrapper">
                <div class="row g-0 align-items-center">
                    <div class="col-lg-12 col-xl-6 col-12">
                        <div class="thumbnail image-left-content">
                            <img src="{{ asset('frontend') }}/assets/images/split/split-01.jpg" alt="split Images">
                        </div>
                    </div>
                    <div class="col-lg-12 col-xl-6 col-12">
                        <div class="split-inner">
                            <div class="shape">
                                <img src="{{ asset('frontend') }}/assets/images/shape/school.png" alt="Shape Images">
                            </div>
                            <h4 class="title sal-animate" data-sal="slide-up" data-sal-duration="400"
                                data-sal-delay="200">Campus Information</h4>
                            <p class="description sal-animate" data-sal="slide-up" data-sal-duration="400"
                                data-sal-delay="300">Histudy we prepare you to launch your career by providing a
                                supportive, creative, and professional environment from which to learn practical
                                skills, build a network of industry contacts.</p>
                            <ul class="split-list sal-animate" data-sal="slide-up" data-sal-duration="400"
                                data-sal-delay="350">
                                <li>- Doug DeMarco, Design Prototyping Manager</li>
                                <li>- 108 million paying subscribers</li>
                                <li>- Over 1.7 billion hours of music played monthly</li>
                                <li>- 4,000+ employees working across 16 offices</li>
                            </ul>
                            <div class="view-more-button mt--35 sal-animate" data-sal="slide-up"
                                data-sal-duration="400" data-sal-delay="400">
                                <a class="rbt-moderbt-btn" href="#">
                                    <span class="moderbt-btn-text">Schedule A Tour</span>
                                    <i class="feather-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="rbt-about-area about-style-1 bg-color-white rbt-section-gap">
    <div class="wrapper">
        <div class="container">
            <div class="row g-5 align-items-start">
                <div class="col-lg-4">
                    <div class="content">
                        <h2 class="title" data-sal="slide-up" data-sal-duration="700">Graduate Programs.</h2>
                    </div>
                </div>
                <div class="col-lg-4" data-sal="slide-up" data-sal-duration="700">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam inventore praesentium alias
                        incidunt! Veritatis, necessitatibus fuga dolore tenetur, beatae suscipit fugit est ea
                        perspiciatis quo provident nisi dolor similique architecto nihil.</p>
                </div>
                <div class="col-lg-4" data-sal="slide-up" data-sal-duration="700">
                    <p>Graduate Programs dolor sit amet consectetur adipisicing elit. Nam inventore praesentium
                        alias incidunt! Veritatis, necessitatibus fuga dolore tenetur, beatae suscipit fugit est ea
                        perspiciatis quo provident nisi dolor similique architecto nihil.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="wrapper mt--60">
        <div class="container">
            <div class="row g-5">

                <!-- Start Single Card  -->
                <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up"
                    data-sal-duration="800">
                    <div class="rbt-card variation-03 rbt-hover">
                        <div class="rbt-card-img">
                            <a class="thumbnail-link" href="course-details.html">
                                <img src="{{ asset('frontend') }}/assets/images/course/classic-lms-01.jpg" alt="Card image">
                                <span class="rbt-btn btn-white icon-hover">
                                    <span class="btn-text">Read More</span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                </span>
                            </a>
                        </div>
                        <div class="rbt-card-body">
                            <h5 class="rbt-card-title"><a href="course-details.html">Biochemistry</a>
                            </h5>
                            <div class="rbt-card-bottom">
                                <a class="transparent-button" href="course-details.html"><i><svg width="17"
                                            height="12" xmlns="http://www.w3.org/2000/svg">
                                            <g stroke="#27374D" fill="none" fill-rule="evenodd">
                                                <path d="M10.614 0l5.629 5.629-5.63 5.629" />
                                                <path stroke-linecap="square" d="M.663 5.572h14.594" />
                                            </g>
                                        </svg></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Card  -->

                <!-- Start Single Card  -->
                <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up"
                    data-sal-duration="800">
                    <div class="rbt-card variation-03 rbt-hover">
                        <div class="rbt-card-img">
                            <a class="thumbnail-link" href="course-details.html">
                                <img src="{{ asset('frontend') }}/assets/images/course/classic-lms-02.jpg" alt="Card image">
                                <span class="rbt-btn btn-white icon-hover">
                                    <span class="btn-text">Read More</span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                </span>
                            </a>
                        </div>
                        <div class="rbt-card-body">
                            <h5 class="rbt-card-title"><a href="course-details.html">Public Administration</a>
                            </h5>
                            <div class="rbt-card-bottom">
                                <a class="transparent-button" href="course-details.html"><i><svg width="17"
                                            height="12" xmlns="http://www.w3.org/2000/svg">
                                            <g stroke="#27374D" fill="none" fill-rule="evenodd">
                                                <path d="M10.614 0l5.629 5.629-5.63 5.629" />
                                                <path stroke-linecap="square" d="M.663 5.572h14.594" />
                                            </g>
                                        </svg></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Card  -->

                <!-- Start Single Card  -->
                <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up"
                    data-sal-duration="800">
                    <div class="rbt-card variation-03 rbt-hover">
                        <div class="rbt-card-img">
                            <a class="thumbnail-link" href="course-details.html">
                                <img src="{{ asset('frontend') }}/assets/images/course/classic-lms-03.jpg" alt="Card image">
                                <span class="rbt-btn btn-white icon-hover">
                                    <span class="btn-text">Read More</span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                </span>
                            </a>
                        </div>
                        <div class="rbt-card-body">
                            <h5 class="rbt-card-title"><a href="course-details.html">Major In Marketing</a>
                            </h5>
                            <div class="rbt-card-bottom">
                                <a class="transparent-button" href="course-details.html"><i><svg width="17"
                                            height="12" xmlns="http://www.w3.org/2000/svg">
                                            <g stroke="#27374D" fill="none" fill-rule="evenodd">
                                                <path d="M10.614 0l5.629 5.629-5.63 5.629" />
                                                <path stroke-linecap="square" d="M.663 5.572h14.594" />
                                            </g>
                                        </svg></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Card  -->


                <!-- Start Single Card  -->
                <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up"
                    data-sal-duration="800">
                    <div class="rbt-card variation-03 rbt-hover">
                        <div class="rbt-card-img">
                            <a class="thumbnail-link" href="course-details.html">
                                <img src="{{ asset('frontend') }}/assets/images/course/course-online-02.jpg" alt="Card image">
                                <span class="rbt-btn btn-white icon-hover">
                                    <span class="btn-text">Read More</span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                </span>
                            </a>
                        </div>
                        <div class="rbt-card-body">
                            <h5 class="rbt-card-title"><a href="course-details.html">Business Media</a>
                            </h5>
                            <div class="rbt-card-bottom">
                                <a class="transparent-button" href="course-details.html"><i><svg width="17"
                                            height="12" xmlns="http://www.w3.org/2000/svg">
                                            <g stroke="#27374D" fill="none" fill-rule="evenodd">
                                                <path d="M10.614 0l5.629 5.629-5.63 5.629" />
                                                <path stroke-linecap="square" d="M.663 5.572h14.594" />
                                            </g>
                                        </svg></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Card  -->

                <!-- Start Single Card  -->
                <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up"
                    data-sal-duration="800">
                    <div class="rbt-card variation-03 rbt-hover">
                        <div class="rbt-card-img">
                            <a class="thumbnail-link" href="course-details.html">
                                <img src="{{ asset('frontend') }}/assets/images/course/course-online-03.jpg" alt="Card image">
                                <span class="rbt-btn btn-white icon-hover">
                                    <span class="btn-text">Read More</span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                </span>
                            </a>
                        </div>
                        <div class="rbt-card-body">
                            <h5 class="rbt-card-title"><a href="course-details.html">BSc in CSE</a>
                            </h5>
                            <div class="rbt-card-bottom">
                                <a class="transparent-button" href="course-details.html"><i><svg width="17"
                                            height="12" xmlns="http://www.w3.org/2000/svg">
                                            <g stroke="#27374D" fill="none" fill-rule="evenodd">
                                                <path d="M10.614 0l5.629 5.629-5.63 5.629" />
                                                <path stroke-linecap="square" d="M.663 5.572h14.594" />
                                            </g>
                                        </svg></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Card  -->

                <!-- Start Single Card  -->
                <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up"
                    data-sal-duration="800">
                    <div class="rbt-card variation-03 rbt-hover">
                        <div class="rbt-card-img">
                            <a class="thumbnail-link" href="course-details.html">
                                <img src="{{ asset('frontend') }}/assets/images/course/course-online-06.jpg" alt="Card image">
                                <span class="rbt-btn btn-white icon-hover">
                                    <span class="btn-text">Read More</span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                </span>
                            </a>
                        </div>
                        <div class="rbt-card-body">
                            <h5 class="rbt-card-title"><a href="course-details.html">Accounting</a>
                            </h5>
                            <div class="rbt-card-bottom">
                                <a class="transparent-button" href="course-details.html"><i><svg width="17"
                                            height="12" xmlns="http://www.w3.org/2000/svg">
                                            <g stroke="#27374D" fill="none" fill-rule="evenodd">
                                                <path d="M10.614 0l5.629 5.629-5.63 5.629" />
                                                <path stroke-linecap="square" d="M.663 5.572h14.594" />
                                            </g>
                                        </svg></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Card  -->

            </div>
        </div>
    </div>
</div>

<!-- Start Service Area -->
<div class="rbt-service-area bg-gradient-2 rbt-section-gapTop">
    <div class="container">
        <div class="row mb--60">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <span class="subtitle bg-pink-opacity">ONLINE COURSE</span>
                    <h2 class="title">Our Online Course</h2>
                </div>
            </div>
        </div>
        <div class="swiper service-item-3-activation  rbt-arrow-between gutter-swiper-30">

            <div class="swiper-wrapper">
                <!-- Start Single Card  -->
                <div class="swiper-slide">
                    <div class="single-slide">
                        <div class="rbt-service rbt-service-2 rbt-hover-02 bg-no-shadow card-bg-1">
                            <div class="inner">
                                <div class="content">
                                    <h4 class="title"><a href="#">React</a></h4>
                                    <p>React Js dolor sit, amet consectetur.</p>
                                    <a class="transparent-button" href="#">Learn More<i><svg width="17" height="12"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g stroke="#27374D" fill="none" fill-rule="evenodd">
                                                    <path d="M10.614 0l5.629 5.629-5.63 5.629" />
                                                    <path stroke-linecap="square" d="M.663 5.572h14.594" />
                                                </g>
                                            </svg></i></a>
                                </div>
                                <div class="thumbnail">
                                    <img src="{{ asset('frontend') }}/assets/images/service/service-06.png" alt="Education Images">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Card  -->
                <!-- Start Single Card  -->
                <div class="swiper-slide">
                    <div class="single-slide">
                        <div class="rbt-service rbt-service-2 rbt-hover-02 bg-no-shadow card-bg-2">
                            <div class="inner">
                                <div class="content">
                                    <h4 class="title"><a href="#">English</a></h4>
                                    <p>Spken english dolor sit, amet consectetur.</p>
                                    <a class="transparent-button" href="#">Learn More<i><svg width="17" height="12"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g stroke="#27374D" fill="none" fill-rule="evenodd">
                                                    <path d="M10.614 0l5.629 5.629-5.63 5.629" />
                                                    <path stroke-linecap="square" d="M.663 5.572h14.594" />
                                                </g>
                                            </svg></i></a>
                                </div>
                                <div class="thumbnail">
                                    <img src="{{ asset('frontend') }}/assets/images/service/service-05.png" alt="Education Images">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Card  -->
                <!-- Start Single Card  -->
                <div class="swiper-slide">
                    <div class="single-slide">
                        <div class="rbt-service rbt-service-2 rbt-hover-02 bg-no-shadow card-bg-3">
                            <div class="inner">
                                <div class="content">
                                    <h4 class="title"><a href="#">Education</a></h4>
                                    <p>Eearning edu dolor sit, amet consectetur.</p>
                                    <a class="transparent-button" href="#">Learn More<i><svg width="17" height="12"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g stroke="#27374D" fill="none" fill-rule="evenodd">
                                                    <path d="M10.614 0l5.629 5.629-5.63 5.629" />
                                                    <path stroke-linecap="square" d="M.663 5.572h14.594" />
                                                </g>
                                            </svg></i></a>
                                </div>
                                <div class="thumbnail">
                                    <img src="{{ asset('frontend') }}/assets/images/service/service-03.png" alt="Education Images">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Card  -->

                <!-- Start Single Card  -->
                <div class="swiper-slide">
                    <div class="single-slide">
                        <div class="rbt-service rbt-service-2 rbt-hover-02 bg-no-shadow card-bg-4">
                            <div class="inner">
                                <div class="content">
                                    <h4 class="title"><a href="#">Education</a></h4>
                                    <p>Lorem ipsum dolor sit, amet consectetur.</p>
                                    <a class="transparent-button" href="#">Learn More<i><svg width="17" height="12"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g stroke="#27374D" fill="none" fill-rule="evenodd">
                                                    <path d="M10.614 0l5.629 5.629-5.63 5.629" />
                                                    <path stroke-linecap="square" d="M.663 5.572h14.594" />
                                                </g>
                                            </svg></i></a>
                                </div>
                                <div class="thumbnail">
                                    <img src="{{ asset('frontend') }}/assets/images/service/service-04.png" alt="Education Images">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Card  -->
            </div>

            <div class="rbt-swiper-arrow rbt-arrow-left">
                <div class="custom-overfolow">
                    <i class="rbt-icon feather-arrow-left"></i>
                    <i class="rbt-icon-top feather-arrow-left"></i>
                </div>
            </div>

            <div class="rbt-swiper-arrow rbt-arrow-right">
                <div class="custom-overfolow">
                    <i class="rbt-icon feather-arrow-right"></i>
                    <i class="rbt-icon-top feather-arrow-right"></i>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Service Area -->

<!-- Start Service Area -->
<div class="rbt-service-area bg-color-white rbt-section-gap">
    <div class="container">
        <div class="row mb--60 g-5 align-items-end">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="section-title text-start">
                    <h4 class="title">How to Apply</h4>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <div class="read-more-btn text-start text-md-end">
                    <a class="rbt-moderbt-btn" href="#">
                        <span class="moderbt-btn-text">View All Requirements</span>
                        <i class="feather-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Start Card Area -->
        <div class="row row--15 mt_dec--30">

            <!-- Start Service Grid  -->
            <div class="col-lg-4 col-xl-3 col-xxl-3 col-md-6 col-sm-6 col-12 mt--30">
                <div class="service-card service-card-6">
                    <div class="inner">
                        <div class="icon">
                            <img src="{{ asset('frontend') }}/assets/images/icons/001-bulb.png" alt="icons Images">
                        </div>
                        <div class="content">
                            <h6 class="title"><a href="#">Your Apply</a></h6>
                            <p class="description">English Learning looking for random paragraphs, you've come to
                                the right place.</p>
                        </div>
                        <span class="number-text">1</span>
                    </div>
                </div>
            </div>
            <!-- End Service Grid  -->

            <!-- Start Service Grid  -->
            <div class="col-lg-4 col-xl-3 col-xxl-3 col-md-6 col-sm-6 col-12 mt--30">
                <div class="service-card service-card-6">
                    <div class="inner">
                        <div class="icon">
                            <img src="{{ asset('frontend') }}/assets/images/icons/002-hat.png" alt="Shape Images">
                        </div>
                        <div class="content">
                            <h6 class="title"><a href="#">We Connect</a></h6>
                            <p class="description">Javascript Learning looking for random paragraphs, you've come to
                                the right place.</p>
                        </div>
                        <span class="number-text">2</span>
                    </div>
                </div>
            </div>
            <!-- End Service Grid  -->

            <!-- Start Service Grid  -->
            <div class="col-lg-4 col-xl-3 col-xxl-3 col-md-6 col-sm-6 col-12 mt--30">
                <div class="service-card service-card-6">
                    <div class="inner">
                        <div class="icon">
                            <img src="{{ asset('frontend') }}/assets/images/icons/003-id-card.png" alt="Shape Images">
                        </div>
                        <div class="content">
                            <h6 class="title"><a href="#">You Get Ready</a></h6>
                            <p class="description">Angular Learning looking for random paragraphs, you've come to
                                the right place.</p>
                        </div>
                        <span class="number-text">3</span>
                    </div>
                </div>
            </div>
            <!-- End Service Grid  -->

            <!-- Start Service Grid  -->
            <div class="col-lg-4 col-xl-3 col-xxl-3 col-md-6 col-sm-6 col-12 mt--30">
                <div class="service-card service-card-6">
                    <div class="inner">
                        <div class="icon">
                            <img src="{{ asset('frontend') }}/assets/images/icons/004-pass.png" alt="Shape Images">
                        </div>
                        <div class="content">
                            <h6 class="title"><a href="#">Completed</a></h6>
                            <p class="description">Php Learning looking for random paragraphs, you've come to the
                                right place.</p>
                        </div>
                        <span class="number-text">4</span>
                    </div>
                </div>
            </div>
            <!-- End Service Grid  -->

        </div>
        <!-- End Card Area -->
    </div>
</div>
<!-- End Service Area -->



<!-- Start CallTo Action Area  -->
<div class="rbt-call-to-action-area rbt-section-gap bg-gradient-8">
    <div class="rbt-callto-action rbt-cta-default style-6">
        <div class="container">
            <div class="row g-5 align-items-center content-wrapper">
                <div class="col-xxl-3 col-xl-3 col-lg-6">
                    <div class="inner">
                        <div class="content text-start">
                            <h2 class="title color-white mb--0">Scholarship Programs</h2>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6">
                    <div class="inner-content text-start">
                        <p class="color-white">Apply for Admission in Post Graduate Diploma. Application Deadline:
                            26th
                            September 2024 · Undergraduate & Graduate Admission: Fall 2024 Semester · 20% Waiver on
                            ...
                        </p>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-6">
                    <div class="call-to-btn text-start text-xl-end">
                        <a class="rbt-btn btn-white hover-icon-reverse" href="#">
                            <span class="icon-reverse-wrapper">
                                <span class="btn-text">Histudy Financial Aid</span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Start Blog Style -->
<div class="rbt-rbt-blog-area rbt-section-gapTop bg-color-white">
    <div class="container">

        <div class="row mb--55 g-5 align-items-end">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="section-title text-start">
                    <span class="subtitle bg-secondary-opacity">Latest News</span>
                    <h2 class="title">Have a look on our news</h2>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <div class="read-more-btn text-start text-md-end">
                    <a class="rbt-moderbt-btn" href="#">
                        <span class="moderbt-btn-text">View All News</span>
                        <i class="feather-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Start Card Area -->
        <div class="row g-5">
            <!-- Start Single Card  -->
            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="rbt-card variation-02 rbt-hover">
                    <div class="rbt-card-img">
                        <a href="course-details.html">
                            <img src="{{ asset('frontend') }}/assets/images/blog/blog-grid-04.jpg" alt="Card image"> </a>
                    </div>
                    <div class="rbt-card-body">
                        <h5 class="rbt-card-title"><a href="course-details.html">Is lms The Most Trending
                                Thing Now?</a></h5>
                        <p class="rbt-card-text">It is a long established fact that a reader.</p>
                        <div class="rbt-card-bottom">
                            <a class="transparent-button" href="course-details.html">Learn
                                More<i><svg width="17" height="12" xmlns="http://www.w3.org/2000/svg">
                                        <g stroke="#27374D" fill="none" fill-rule="evenodd">
                                            <path d="M10.614 0l5.629 5.629-5.63 5.629" />
                                            <path stroke-linecap="square" d="M.663 5.572h14.594" />
                                        </g>
                                    </svg></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Card  -->

            <!-- Start Single Card  -->
            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="rbt-card variation-02 rbt-hover">
                    <div class="rbt-card-img">
                        <a href="course-details.html">
                            <img src="{{ asset('frontend') }}/assets/images/blog/blog-grid-05.jpg" alt="Card image"> </a>
                    </div>
                    <div class="rbt-card-body">
                        <h5 class="rbt-card-title"><a href="course-details.html">Learn How More Money With
                                lms.</a></h5>
                        <p class="rbt-card-text">It is a long established fact that a reader.</p>
                        <div class="rbt-card-bottom">
                            <a class="transparent-button" href="course-details.html">Learn
                                More<i><svg width="17" height="12" xmlns="http://www.w3.org/2000/svg">
                                        <g stroke="#27374D" fill="none" fill-rule="evenodd">
                                            <path d="M10.614 0l5.629 5.629-5.63 5.629" />
                                            <path stroke-linecap="square" d="M.663 5.572h14.594" />
                                        </g>
                                    </svg></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Card  -->

            <!-- Start Single Card  -->
            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="rbt-card variation-02 rbt-hover">
                    <div class="rbt-card-img">
                        <a href="course-details.html">
                            <img src="{{ asset('frontend') }}/assets/images/blog/blog-grid-06.jpg" alt="Card image"> </a>
                    </div>
                    <div class="rbt-card-body">
                        <h5 class="rbt-card-title"><a href="course-details.html">Understand The Background Of
                                lms.</a></h5>
                        <p class="rbt-card-text">It is a long established fact that a reader.</p>
                        <div class="rbt-card-bottom">
                            <a class="transparent-button" href="course-details.html">Learn
                                More<i><svg width="17" height="12" xmlns="http://www.w3.org/2000/svg">
                                        <g stroke="#27374D" fill="none" fill-rule="evenodd">
                                            <path d="M10.614 0l5.629 5.629-5.63 5.629" />
                                            <path stroke-linecap="square" d="M.663 5.572h14.594" />
                                        </g>
                                    </svg></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Card  -->
        </div>
        <!-- End Card Area -->
    </div>
</div>
<!-- End Blog Style -->

<!-- Start Call To Action  -->
<div class="rbt-callto-action-area rbt-section-gapTop">
    <div class="rbt-callto-action rbt-cta-default style-4 bg-gradient-6 mt--75">
        <div class="container">
            <div class="row align-items-center content-wrapper row--30 mt_dec--30 position-relative">
                <div class="col-lg-8 mt--30 offset-lg-3">
                    <div class="inner">
                        <div class="content text-left">
                            <h2 class="title" data-sal="slide-up">Ready to start creating a Educational Website?
                            </h2>
                            <div class="call-to-btn text-start mt--30">
                                <a class="rbt-btn btn-gradient hover-icon-reverse radius-round" href="#">
                                    <span class="icon-reverse-wrapper">
                                        <span class="btn-text">Purchase Histudy</span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="thumbnail">
                    <img class="w-100" src="{{ asset('frontend') }}/assets/images/shape/cta.png" alt="Shape Images">
                </div>
            </div>
        </div>
    </div>

</div>
@endsection