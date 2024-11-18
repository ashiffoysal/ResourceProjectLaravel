@extends('layouts.frontend')
@section('content')

<div class="rbt-page-banner-wrapper">
    <!-- Start Banner BG Image  -->
    <div class="rbt-banner-image"></div>
    <!-- End Banner BG Image  -->
    <div class="rbt-banner-content">

        <!-- Start Banner Content Top  -->
        <div class="rbt-banner-content-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <!-- Start Breadcrumb Area  -->
                        <ul class="page-list">
                            <li class="rbt-breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                            <li>
                                <div class="icon-right"><i class="feather-chevron-right"></i></div>
                            </li>
                            <li class="rbt-breadcrumb-item active">All Blog</li>
                        </ul>
                        <!-- End Breadcrumb Area  -->

                        <div class=" title-wrapper">
                            {{-- <h1 class="title mb--0">All Blog</h1> --}}
                            {{-- <a href="#" class="rbt-badge-2">
                                <div class="image">🎉</div> 50 Articles
                            </a> --}}
                        </div>

                        <p class="description">Blogs that help find resources and others.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Banner Content Top  -->
    </div>
</div>

<!-- Start Card Style -->
<div class="rbt-blog-area rbt-section-overlayping-top rbt-section-gapBottom">
    <div class="container">
        <!-- Start Card Area -->
        <div class="row">
            <div class="col-lg-10 offset-lg-1 mt_dec--30">

                @foreach ($allBlogs as $blogs)
                <div class="rbt-card card-list variation-02 rbt-hover mt--30">
                    <div class="rbt-card-img">
                        <a href="{{ url('blog-details/'.$blogs->slug) }}">
                            <img src="{{ asset('uploads/blogs/'.$blogs->image) }}" alt="Card image"> </a>
                    </div>
                    <div class="rbt-card-body">
                        <h5 class="rbt-card-title"><a href="{{ url('blog-details/'.$blogs->slug) }}">{{ $blogs->title }}</a>
                        </h5>
                        <div class="rbt-card-bottom">
                            <a class="transparent-button" href="{{ url('blog-details/'.$blogs->slug) }}">Read
                                Article<i><svg width="17" height="12" xmlns="http://www.w3.org/2000/svg">
                                        <g stroke="#27374D" fill="none" fill-rule="evenodd">
                                            <path d="M10.614 0l5.629 5.629-5.63 5.629" />
                                            <path stroke-linecap="square" d="M.663 5.572h14.594" />
                                        </g>
                                    </svg></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
            
            </div>
        </div>
        <!-- End Card Area -->
        {{ $allBlogs->links('vendor.pagination.mycustompagination') }}

    </div>
</div>
<!-- End Card Style -->
@endsection