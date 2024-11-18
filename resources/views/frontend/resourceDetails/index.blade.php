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
                            <li class="rbt-breadcrumb-item"><a href="index.html">Home</a></li>
                            <li>
                                <div class="icon-right"><i class="feather-chevron-right"></i></div>
                            </li>
                            <li class="rbt-breadcrumb-item active">{{ $category->category_name ?? '' }}</li>
                            <li>
                                <div class="icon-right"><i class="feather-chevron-right"></i></div>
                            </li>
                            <li class="rbt-breadcrumb-item active">{{ $subcategory->subcategory_name ?? '' }}</li>
                        </ul>
                        <h2 class="title">Your Ultimate Exam Resource Hub</h2>
                        <p class="description">Our comprehensive resource collection is an invaluable asset for students striving to excel in exams and for teachers looking for dependable materials to guide their students. Explore a wide range of revision notes, exam questions, detailed model answers, past exam papers, and more, all carefully organized to make your search effortless.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb Area -->
    <div class="rbt-course-details-area ptb--60">
        <div class="container">
            <div class="row g-5">

                <div class="col-lg-12">
                    <div class="course-details-content">
                        <div class="rbt-inner-onepage-navigation sticky-top mt--30">
                            <nav class="mainmenu-nav onepagenav">
                                <ul class="mainmenu">
                                    @foreach ($subcategory->resubcategories as $resubkey => $resubcategory)
                                    <li @if($resubkey==0) class="current" @endif>
                                        <a href="#{{ $resubcategory->resubcategory_name  }}">{{ $resubcategory->resubcategory_name  }}</a>
                                    </li>
                                    @endforeach
                                </ul>
                            </nav>
                        </div>
                        @foreach ($subcategory->resubcategories as $resubkey => $resubcategory)
                        <div class="rbt-course-feature-box rbt-shadow-box details-wrapper mt--30" id="{{  $resubcategory->resubcategory_name ?? ''}}">
                            <div class="row g-5">
                                <!-- Start Feture Box  -->
                                <div class="col-lg-12">
                                    <p class="description">{{ $category->category_name ?? '' }} {{  $resubcategory->resubcategory_name ?? ''}} {{ $subcategory->subcategory_name ?? '' }}</p>
                                </div>
                                @if($resubcategory->past_papers==1)
                                <div class="col-lg-3">
                                    {{-- <a href="{{ url('pastpapers',$category->slug.'/'.$subcategory->slug.'/'.$resubcategory->slug) }}"> --}}
                                    <a href="{{ url('pastpapers/' . $category->slug . '/' . $subcategory->slug . '/' . $resubcategory->slug) }}">

                                    <div class="section-title newDesign">
                                        <i class="fa fa-book"></i>
                                        <h4 class="rbt-title-style-3 mb--20">Past Paper <i class="fa fa-arrow-right"></i></h4>
                                    </div>
                                    </a>
                                </div>
                                @endif
                                <!-- End Feture Box  -->
                                <!-- Start Feture Box  -->
                                @if($resubcategory->revision_notes==1)
                                <div class="col-lg-3">
                                    <div class="section-title newDesign">
                                        <i class="fa fa-book"></i>
                                        <h4 class="rbt-title-style-3 mb--20">Revision Notes <i class="fa fa-arrow-right"></i></h4>
                                    </div>
                                </div>
                                @endif
                                @if($resubcategory->exam_questions==1)
                                <div class="col-lg-3">
                                    <div class="section-title newDesign">
                                        <i class="fa fa-book"></i>
                                        <h4 class="rbt-title-style-3 mb--20">Exam Questions <i class="fa fa-arrow-right"></i></h4>
                                    </div>
                                </div>
                                @endif
                                @if($resubcategory->flashcards==1)
                                <div class="col-lg-3">
                                    <div class="section-title newDesign">
                                        <i class="fa fa-book"></i>
                                        <h4 class="rbt-title-style-3 mb--20">Flash Cards<i class="fa fa-arrow-right"></i></h4>
                                    </div>
                                </div>
                                @endif
                                <!-- End Feture Box  -->
                            </div>
                        </div>
                        @endforeach
                    </div>
                  
                </div>

               
            </div>
        </div>
    </div>



@endsection