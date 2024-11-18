@extends('layouts.frontend')
@section('content')
<div class="rbt-overlay-page-wrapper">

    <div class="breadcrumb-image-container breadcrumb-style-max-width">
        <div class="breadcrumb-image-wrapper">
            <div class="breadcrumb-dark">
                <img src="assets/images/bg/bg-image-10.jpg" alt="Education Images">
            </div>
        </div>
        <div class="breadcrumb-content-top text-center">
            <h1 class="title">Privacy Policy</h1>
            <p class="mb--20"> Privacy Policy Here.</p>
            <ul class="page-list">
                <li class="rbt-breadcrumb-item"><a href="index.html">Home</a></li>
                <li>
                    <div class="icon-right"><i class="feather-chevron-right"></i></div>
                </li>
                <li class="rbt-breadcrumb-item active">Purchase Guide</li>
            </ul>
        </div>
    </div>


    <div class="rbt-putchase-guide-area breadcrumb-style-max-width rbt-section-gapBottom">
        <div class="rbt-article-content-wrapper">
            <div class="post-thumbnail mb--30 position-relative wp-block-image alignwide">
                {{-- <img class="w-100" src="assets/images/blog/blog-card-01.jpg" alt="Blog Images"> --}}
            </div>
            <div class="content">
                {!! $privacyPolicy->value !!}
            </div>
        </div>
    </div>

</div>


@endsection