@extends('layouts.frontend')
@section('content')



    <!-- Start breadcrumb Area -->
    <div class="rbt-breadcrumb-default rbt-breadcrumb-style-3">
        <div class="breadcrumb-inner breadcrumb-dark">
            <img src="{{ asset('frontend') }}/assets/images/bg/bg-image-10.jpg" alt="Education Images">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="content text-start">
                        <ul class="page-list">
                            <li class="rbt-breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                            <li>
                                <div class="icon-right"><i class="feather-chevron-right"></i></div>
                            </li>
                            <li class="rbt-breadcrumb-item active">{{ $category->category_name ?? '' }} </li>
                            <li>
                                <div class="icon-right"><i class="feather-chevron-right"></i></div>
                            </li>
                            <li class="rbt-breadcrumb-item active">{{ $subcategory->subcategory_name ?? '' }}</li>
                            <li>
                                <div class="icon-right"><i class="feather-chevron-right"></i></div>
                            </li>
                            <li class="rbt-breadcrumb-item active">{{ $resubcategory->resubcategory_name ?? '' }}</li>
                        </ul>
                        <h2 class="title">Your Ultimate Exam Resource Hub</h2>
                        <p class="description"> Our comprehensive resource collection is an invaluable asset for students striving to excel in exams and for teachers looking for dependable materials to guide their students. Explore a wide range of revision notes, exam questions, detailed model answers, past exam papers, and more, all carefully organized to make your search effortless.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class=" rbt-section-gapBottom">
        <div class="inner">
            <div class="container">
                <div class="col-lg-12">
                    <!-- Start Viedo Wrapper  -->
                   
                    <!-- End Viedo Wrapper  -->

                    <div class="row row--30 gy-5 pt--60">

                        <div class="col-lg-4">
                            <div class="course-sidebar sticky-top rbt-shadow-box rbt-gradient-border">
                                <div class="inner">
                                    <div class="content-item-content">
                                        <div
                                            class="rbt-price-wrapper d-flex flex-wrap align-items-center justify-content-between">
                                            <div class="rbt-price">
                                                {{-- <span class="current-price">$60.99</span>
                                                <span class="off-price">$84.99</span> --}}
                                            </div>
                                            <div class="discount-time">
                                                {{-- <span class="rbt-badge color-danger bg-color-danger-opacity"><i
                                                        class="feather-clock"></i> 3 days left!</span> --}}
                                            </div>
                                        </div>

                                        <div class="add-to-card-button mt--15">
                                            {{-- <a class="rbt-btn btn-gradient icon-hover w-100 d-block text-center"
                                                href="#">
                                                <span class="btn-text">Add to Cart</span>
                                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                            </a> --}}
                                        </div>

                                        <div class="buy-now-btn mt--15">
                                            <a class="rbt-btn btn-border icon-hover w-100 d-block text-center" href="{{ url('/individuals-pricing') }}">
                                                <span class="btn-text">Buy Now Subscription</span>
                                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                            </a>
                                        </div>

                                        <span class="subtitle"><i class="feather-rotate-ccw"></i> 30-Day Money-Back
                                            Guarantee</span>


                                        <div class="rbt-widget-details has-show-more">
                                            <ul class="has-show-more-inner-content rbt-course-details-list-wrapper">
                                                @foreach ($category_id->allsubcategory  as $allSub)
                                                    <li><span>{{ $allSub->subcategory_name }}</span></li>
                                                @endforeach
                                            </ul>
                                            <div class="rbt-show-more-btn">Show More</div>
                                        </div>

                                        <div class="social-share-wrapper mt--30 text-center">
                                            <div
                                                class="rbt-post-share d-flex align-items-center justify-content-center">
                                                <ul
                                                    class="social-icon social-default transparent-with-border justify-content-center">
                                                    <li><a href="{{ $social->facebook }}">
                                                            <i class="feather-facebook"></i>
                                                        </a>
                                                    </li>
                                                    <li><a href="{{ $social->twitter }}">
                                                            <i class="feather-twitter"></i>
                                                        </a>
                                                    </li>
                                                    <li><a href="{{ $social->youtube }}">
                                                            <i class="feather-youtube"></i>
                                                        </a>
                                                    </li>
                                                    <li><a href="{{ $social->linkend }}">
                                                            <i class="feather-linkedin"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <hr class="mt--20">
                                            <div class="contact-with-us text-center">
                                                <p>For details about us</p>
                                                <p class="rbt-badge-2 mt--10 justify-content-center w-100"><i
                                                        class="feather-phone mr--5"></i> Call Us: <a
                                                        href="#"><strong>{{ $companyInformation->mobile }}</strong></a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-8">
                            <!-- Start Course Details  -->
                            <div class="course-details-content">
                                <div class="course-content rbt-shadow-box coursecontent-wrapper mt--30"
                                    id="coursecontent">
                                    <div class="rbt-course-feature-inner">
                                        <div class="section-title">
                                            <h4 class="rbt-title-style-3">Course Content</h4>
                                        </div>
                                        <div class="rbt-accordion-style rbt-accordion-02 accordion">
                                            <div class="accordion" id="accordionExampleb2">
                                                @php
                                                    $i=100;
                                                 @endphp
                                                @foreach ($allPastPaper as $seriesName => $pastPapers)
                                                @php
                                                    $i++
                                                @endphp
                                                <div class="accordion-item card">
                                                    <h2 class="accordion-header card-header" id="headingTwo1{{ $i }}">
                                                        <button class="accordion-button" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo1{{ $i }}"
                                                            aria-expanded="true" aria-controls="collapseTwo1{{ $i }}">
                                                            {{ $seriesName }} <span
                                                                class="rbt-badge-5 ml--10">{{ $resubcategory->resubcategory_name ?? '' }}</span>
                                                        </button>
                                                    </h2>
                                                    
                                                    <div id="collapseTwo1{{ $i }}" class="accordion-collapse collapse  show"
                                                        aria-labelledby="headingTwo1{{ $i }}"
                                                        data-bs-parent="#accordionExampleb2">
                                                        <div class="accordion-body card-body pr--0">
                                                            <ul class="rbt-course-main-content liststyle">
                                                            
                                                                <li>
                                                                    <a href="#">
                                                                        <div class="course-content-left">
                                                                            {{-- <i class="feather-play-circle"></i>  --}}
                                                                            <span class="text">Question</span>
                                                                        </div>
                                                                     
                                                                        <div class="course-content-right">
                                                                            
                                                                            <span class="rbt-badge variation-03 ">
                                                                                {{-- <i class="feather-eye"></i> --}}
                                                                                Mark Scheme</span>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                @foreach ($pastPapers as $paper)
                                                                <li>
                                                                    <div class="myclass" style="display: flex;align-items: center;justify-content: space-between;flex-wrap: wrap;">
                                                                        <div class="course-content-left">
                                                                            <a href="{{ asset('uploads/pastpaper/'. $paper->ques_paper) }} ">
                                                                            <i class="feather-file-text"></i>
                                                                            <span class="rbt-badge variation-03 bg-primary-opacity">{{ $paper->title }}</span>
                                                                            </a>
                                                                        </div>
                                                                        <div class="course-content-right">
                                                                            <a href="{{ asset('uploads/pastpaper/'. $paper->ans_paper) }} ">
                                                                                <span class="rbt-badge variation-03 bg-primary-opacity">Mark Scheme</span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                   
                                                                </li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    </div>
                                                 
                                                </div>
                                            @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{--   
                                <div class="rbt-review-wrapper rbt-shadow-box review-wrapper mt--30" id="review">
                                    <div class="course-content">
                                        <div class="section-title">
                                            <h4 class="rbt-title-style-3">Review</h4>
                                        </div>
                                        <div class="row g-5 align-items-center">
                                            <div class="col-lg-3">
                                                <div class="rating-box">
                                                    <div class="rating-number">5.0</div>
                                                    <div class="rating">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="currentColor" class="bi bi-star-fill"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="currentColor" class="bi bi-star-fill"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="currentColor" class="bi bi-star-fill"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="currentColor" class="bi bi-star-fill"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="currentColor" class="bi bi-star-fill"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                        </svg>
                                                    </div>
                                                    <span class="sub-title">Course Rating</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-9">
                                                <div class="review-wrapper">
                                                    <div class="single-progress-bar">
                                                        <div class="rating-text">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor" class="bi bi-star-fill"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor" class="bi bi-star-fill"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor" class="bi bi-star-fill"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor" class="bi bi-star-fill"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor" class="bi bi-star-fill"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                            </svg>
                                                        </div>
                                                        <div class="progress">
                                                            <div class="progress-bar" role="progressbar"
                                                                style="width: 63%" aria-valuenow="63" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                        <span class="value-text">63%</span>
                                                    </div>

                                                    <div class="single-progress-bar">
                                                        <div class="rating-text">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor" class="bi bi-star-fill"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor" class="bi bi-star-fill"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor" class="bi bi-star-fill"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor" class="bi bi-star-fill"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor" class="bi bi-star"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                                            </svg>
                                                        </div>
                                                        <div class="progress">
                                                            <div class="progress-bar" role="progressbar"
                                                                style="width: 29%" aria-valuenow="29" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                        <span class="value-text">29%</span>
                                                    </div>

                                                    <div class="single-progress-bar">
                                                        <div class="rating-text">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor" class="bi bi-star-fill"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor" class="bi bi-star-fill"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor" class="bi bi-star-fill"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor" class="bi bi-star"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor" class="bi bi-star"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                                            </svg>
                                                        </div>
                                                        <div class="progress">
                                                            <div class="progress-bar" role="progressbar"
                                                                style="width: 6%" aria-valuenow="6" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                        <span class="value-text">6%</span>
                                                    </div>

                                                    <div class="single-progress-bar">
                                                        <div class="rating-text">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor" class="bi bi-star-fill"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor" class="bi bi-star-fill"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor" class="bi bi-star"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor" class="bi bi-star"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor" class="bi bi-star"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                                            </svg>
                                                        </div>
                                                        <div class="progress">
                                                            <div class="progress-bar" role="progressbar"
                                                                style="width: 1%" aria-valuenow="1" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                        <span class="value-text">1%</span>
                                                    </div>

                                                    <div class="single-progress-bar">
                                                        <div class="rating-text">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor" class="bi bi-star-fill"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor" class="bi bi-star"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor" class="bi bi-star"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor" class="bi bi-star"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor" class="bi bi-star"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                                            </svg>
                                                        </div>
                                                        <div class="progress">
                                                            <div class="progress-bar" role="progressbar"
                                                                style="width: 1%" aria-valuenow="1" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                        <span class="value-text">1%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Edu Review List  -->

                                <div class="about-author-list rbt-shadow-box featured-wrapper mt--30 has-show-more">
                                    <div class="section-title">
                                        <h4 class="rbt-title-style-3">Featured review</h4>
                                    </div>
                                    <div class="has-show-more-inner-content rbt-featured-review-list-wrapper">
                                        <div class="rbt-course-review about-author">
                                            <div class="media">
                                                <div class="thumbnail">
                                                    <a href="#">
                                                        <img src="assets/images/testimonial/testimonial-3.jpg"
                                                            alt="Author Images">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <div class="author-info">
                                                        <h5 class="title">
                                                            <a class="hover-flip-item-wrapper" href="#">
                                                                Farjana Bawnia
                                                            </a>
                                                        </h5>
                                                        <div class="rating">
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="content">
                                                        <p class="description">At 29 years old, my favorite compliment
                                                            is being
                                                            told that I look like my mom. Seeing myself in her image,
                                                            like this
                                                            daughter up top.</p>
                                                        <ul
                                                            class="social-icon social-default transparent-with-border justify-content-start">
                                                            <li><a href="#">
                                                                    <i class="feather-thumbs-up"></i>
                                                                </a>
                                                            </li>
                                                            <li><a href="#">
                                                                    <i class="feather-thumbs-down"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="rbt-course-review about-author">
                                            <div class="media">
                                                <div class="thumbnail">
                                                    <a href="#">
                                                        <img src="assets/images/testimonial/testimonial-4.jpg"
                                                            alt="Author Images">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <div class="author-info">
                                                        <h5 class="title">
                                                            <a class="hover-flip-item-wrapper" href="#">Razwan Islam</a>
                                                        </h5>
                                                        <div class="rating">
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="content">
                                                        <p class="description">My favorite compliment is being
                                                            told that I look like my mom. Seeing myself in her image,
                                                            like this
                                                            daughter up top.</p>
                                                        <ul
                                                            class="social-icon social-default transparent-with-border justify-content-start">
                                                            <li><a href="#">
                                                                    <i class="feather-thumbs-up"></i>
                                                                </a>
                                                            </li>
                                                            <li><a href="#">
                                                                    <i class="feather-thumbs-down"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="rbt-course-review about-author">
                                            <div class="media">
                                                <div class="thumbnail">
                                                    <a href="#">
                                                        <img src="assets/images/testimonial/testimonial-1.jpg"
                                                            alt="Author Images">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <div class="author-info">
                                                        <h5 class="title">
                                                            <a class="hover-flip-item-wrapper" href="#">Babor Azom</a>
                                                        </h5>
                                                        <div class="rating">
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="content">
                                                        <p class="description">My favorite compliment is being
                                                            told that I look like my mom. Seeing myself in her image,
                                                            like this
                                                            daughter up top.</p>
                                                        <ul
                                                            class="social-icon social-default transparent-with-border justify-content-start">
                                                            <li><a href="#">
                                                                    <i class="feather-thumbs-up"></i>
                                                                </a>
                                                            </li>
                                                            <li><a href="#">
                                                                    <i class="feather-thumbs-down"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="rbt-course-review about-author">
                                            <div class="media">
                                                <div class="thumbnail">
                                                    <a href="#">
                                                        <img src="assets/images/testimonial/testimonial-6.jpg"
                                                            alt="Author Images">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <div class="author-info">
                                                        <h5 class="title">
                                                            <a class="hover-flip-item-wrapper" href="#">Mohammad Ali</a>
                                                        </h5>
                                                        <div class="rating">
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="content">
                                                        <p class="description">My favorite compliment is being
                                                            told that I look like my mom. Seeing myself in her image,
                                                            like this
                                                            daughter up top.</p>
                                                        <ul
                                                            class="social-icon social-default transparent-with-border justify-content-start">
                                                            <li><a href="#">
                                                                    <i class="feather-thumbs-up"></i>
                                                                </a>
                                                            </li>
                                                            <li><a href="#">
                                                                    <i class="feather-thumbs-down"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="rbt-course-review about-author">
                                            <div class="media">
                                                <div class="thumbnail">
                                                    <a href="#">
                                                        <img src="assets/images/testimonial/testimonial-8.jpg"
                                                            alt="Author Images">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <div class="author-info">
                                                        <h5 class="title">
                                                            <a class="hover-flip-item-wrapper" href="#">Sakib Al
                                                                Hasan</a>
                                                        </h5>
                                                        <div class="rating">
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="content">
                                                        <p class="description">My favorite compliment is being
                                                            told that I look like my mom. Seeing myself in her image,
                                                            like this
                                                            daughter up top.</p>
                                                        <ul
                                                            class="social-icon social-default transparent-with-border justify-content-start">
                                                            <li><a href="#">
                                                                    <i class="feather-thumbs-up"></i>
                                                                </a>
                                                            </li>
                                                            <li><a href="#">
                                                                    <i class="feather-thumbs-down"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rbt-show-more-btn">Show More</div>
                                </div>
                                --}}
                            </div>
                            <!-- End Course Details  -->

                            <!-- Start Related Course  -->
                            {{--
                            <div class="related-course mt--60">
                                <div class="row g-5 align-items-end mb--40">
                                    <div class="col-lg-8 col-md-8 col-12">
                                        <div class="section-title">
                                            <span class="subtitle bg-pink-opacity">Top Course</span>
                                            <h4 class="title">More Course By <strong
                                                    class="color-primary">Angela</strong></h4>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-12">
                                        <div class="read-more-btn text-start text-md-end">
                                            <a class="rbt-btn rbt-switch-btn btn-border btn-sm" href="#">
                                                <span data-text="View All Course">View All Course</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-5">
                                    <!-- Start Single Card  -->
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-12" data-sal-delay="150"
                                        data-sal="slide-up" data-sal-duration="800">
                                        <div class="rbt-card variation-01 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a href="course-details.html">
                                                    <img src="assets/images/course/course-online-01.jpg"
                                                        alt="Card image">
                                                    <div class="rbt-badge-3 bg-white">
                                                        <span>-40%</span>
                                                        <span>Off</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <div class="rbt-card-top">
                                                    <div class="rbt-review">
                                                        <div class="rating">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                        </div>
                                                        <span class="rating-count"> (15 Reviews)</span>
                                                    </div>
                                                    <div class="rbt-bookmark-btn">
                                                        <a class="rbt-round-btn" title="Bookmark" href="#"><i
                                                                class="feather-bookmark"></i></a>
                                                    </div>
                                                </div>

                                                <h4 class="rbt-card-title"><a href="course-details.html">React Front To
                                                        Back</a>
                                                </h4>

                                                <ul class="rbt-meta">
                                                    <li><i class="feather-book"></i>12 Lessons</li>
                                                    <li><i class="feather-users"></i>50 Students</li>
                                                </ul>

                                                <p class="rbt-card-text">It is a long established fact that a reader
                                                    will be
                                                    distracted.</p>
                                                <div class="rbt-author-meta mb--10">
                                                    <div class="rbt-avater">
                                                        <a href="#">
                                                            <img src="assets/images/client/avatar-02.png"
                                                                alt="Sophia Jaymes">
                                                        </a>
                                                    </div>
                                                    <div class="rbt-author-info">
                                                        By <a href="profile.html">Angela</a> In <a
                                                            href="#">Development</a>
                                                    </div>
                                                </div>
                                                <div class="rbt-card-bottom">
                                                    <div class="rbt-price">
                                                        <span class="current-price">$60</span>
                                                        <span class="off-price">$120</span>
                                                    </div>
                                                    <a class="rbt-btn-link" href="course-details.html">Learn
                                                        More<i class="feather-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Card  -->

                                    <!-- Start Single Card  -->
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-12" data-sal-delay="150"
                                        data-sal="slide-up" data-sal-duration="800">
                                        <div class="rbt-card variation-01 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a href="course-details.html">
                                                    <img src="assets/images/course/course-online-02.jpg"
                                                        alt="Card image">
                                                </a>
                                            </div>
                                            <div class="rbt-card-body">
                                                <div class="rbt-card-top">
                                                    <div class="rbt-review">
                                                        <div class="rating">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                        </div>
                                                        <span class="rating-count"> (15 Reviews)</span>
                                                    </div>
                                                    <div class="rbt-bookmark-btn">
                                                        <a class="rbt-round-btn" title="Bookmark" href="#"><i
                                                                class="feather-bookmark"></i></a>
                                                    </div>
                                                </div>
                                                <h4 class="rbt-card-title"><a href="course-details.html">PHP Beginner
                                                        Advanced</a>
                                                </h4>
                                                <ul class="rbt-meta">
                                                    <li><i class="feather-book"></i>12 Lessons</li>
                                                    <li><i class="feather-users"></i>50 Students</li>
                                                </ul>

                                                <p class="rbt-card-text">It is a long established fact that a reader
                                                    will be
                                                    distracted.</p>
                                                <div class="rbt-author-meta mb--10">
                                                    <div class="rbt-avater">
                                                        <a href="#">
                                                            <img src="assets/images/client/avatar-02.png"
                                                                alt="Sophia Jaymes">
                                                        </a>
                                                    </div>
                                                    <div class="rbt-author-info">
                                                        By <a href="profile.html">Angela</a> In <a
                                                            href="#">Development</a>
                                                    </div>
                                                </div>
                                                <div class="rbt-card-bottom">
                                                    <div class="rbt-price">
                                                        <span class="current-price">$60</span>
                                                        <span class="off-price">$120</span>
                                                    </div>
                                                    <a class="rbt-btn-link left-icon" href="course-details.html"><i
                                                            class="feather-shopping-cart"></i> Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Card  -->
                                </div>
                            </div>
                               --}}
                            <!-- End Related Course  -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="rbt-separator-mid">
        <div class="container">
            <hr class="rbt-separator m-0">
        </div>
    </div>

  
    <!-- End Course Action Bottom  -->
    <div class="rbt-separator-mid">
        <div class="container">
            <hr class="rbt-separator m-0">
        </div>
    </div>
    <!-- Start Footer aera -->
@endsection

