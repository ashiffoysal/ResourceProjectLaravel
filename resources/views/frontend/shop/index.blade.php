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
                    <div class="col-lg-12">
                        <!-- Start Breadcrumb Area  -->
                        <ul class="page-list">
                            <li class="rbt-breadcrumb-item"><a href="index.html">Home</a></li>
                            <li>
                                <div class="icon-right"><i class="feather-chevron-right"></i></div>
                            </li>
                            <li class="rbt-breadcrumb-item active">All Products</li>
                        </ul>
                        <!-- End Breadcrumb Area  -->

                        <div class=" title-wrapper">
                            <h1 class="title mb--0">All Products</h1>
                            <a href="#" class="rbt-badge-2">
                                <div class="image">🎉</div> 50 Products
                            </a>
                        </div>

                        <p class="description">Products that help beginner designers become true unicorns. </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Banner Content Top  -->

        <!-- Start Course Top  -->
        <div class="rbt-course-top-wrapper mt--40">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-5 col-md-12">
                        <div class="rbt-sorting-list d-flex flex-wrap align-items-center">
                            <div class="rbt-short-item">
                                <span class="course-index">Showing 1-9 of 19 results</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7 col-md-12">
                        <div
                            class="rbt-sorting-list d-flex flex-wrap align-items-center justify-content-start justify-content-lg-end">
                            <div class="rbt-short-item">
                                <div class="filter-select">
                                    <span class="select-label d-block">Short By</span>
                                    <div class="filter-select rbt-modern-select search-by-category">
                                        <select>
                                            <option>Default</option>
                                            <option>Latest</option>
                                            <option>Popularity</option>
                                            <option>Trending</option>
                                            <option>Price: low to high</option>
                                            <option>Price: high to low</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- End Course Top  -->
    </div>
</div>

<div class="rbt-shop-area rbt-section-overlayping-top rbt-section-gapBottom">
    <div class="container">
        <div class="row g-5">
            @foreach ($allData as $data)
            <div class="col-lg-4 col-md-6 col-12">
                <div class="rbt-default-card style-three rbt-hover">
                    <div class="inner">
                        <div class="content pt--0 pb--10">
                            <h2 class="title"><a href="single-product.html">{{ $data->title }}</a></h2>

                            {{-- <span class="team-form">
                                <span class="location">By John Due</span>
                            </span> --}}
                        </div>
                        <div class="thumbnail"><a href="{{ $data->thumbnail_image }}"><img src="{{ asset('uploads/allresources/thumbnail/'.$data->thumbnail_image) }}"
                                    alt="Histudy Book Image"></a></div>
                        <div class="content">

                            <div class="rbt-review justify-content-center">
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <span class="rating-count">(15) - 100% Positive Reviews</span>
                            </div>
                            <div class="rbt-price justify-content-center mt--10">
                                <span class="current-price theme-gradient">£{{ $data->price }}</span>
                                <span class="off-price">£{{ $data->price }}</span>
                            </div>
                            <div class="addto-cart-btn mt--20">
                                <a class="rbt-btn btn-gradient hover-icon-reverse" href="cart.html">
                                    <span class="icon-reverse-wrapper">
                                        <span class="btn-text">Add To Cart</span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
          
        </div>
        <div class="row">
            <div class="col-lg-12 mt--60">
                {{--   
                <nav>
                    <ul class="rbt-pagination">
                        <li><a href="#" aria-label="Previous"><i class="feather-chevron-left"></i></a></li>
                        <li><a href="#">1</a></li>
                        <li class="active"><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#" aria-label="Next"><i class="feather-chevron-right"></i></a></li>
                    </ul>
                </nav>
                --}}
            </div>
        </div>
    </div>
</div>

@endsection