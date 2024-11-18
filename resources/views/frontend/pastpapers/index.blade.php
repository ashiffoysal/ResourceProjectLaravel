@extends('layouts.frontend')
@section('content')
<style>
    .ptb--100 {
    padding: 30px 0 !important;
}
.rbt-section-gap {
    padding: 60px 0;
}
</style>
    <!-- Start breadcrumb Area -->
    <div class="rbt-breadcrumb-default ptb--100 ptb_md--50 ptb_sm--30 bg-gradient-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner text-center">
                        <h2 class="title">PAST PAPERS</h2>
                        <ul class="page-list">
                            <li class="rbt-breadcrumb-item"><a href="index.html">Home</a></li>
                            <li>
                                <div class="icon-right"><i class="feather-chevron-right"></i></div>
                            </li>
                            <li class="rbt-breadcrumb-item active">Past Paper</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb Area -->

    <!-- Start Button Area  -->
    <div class="rbt-button-area rbt-section-gap bg-color-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title text-center">
                        <span class="subtitle bg-primary-opacity">Text...............</span>
                        <h2 class="title">All Exam Series</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section-title text-center">
                        <span class="subtitle bg-primary-opacity">Text...............</span>
                        <h2 class="title">All Exam Series</h2>
                    </div>
                </div>
            </div>
            <div class="row mt--50">
                <div class="col-lg-6">
                    <div class="rbt-button-group">
                        @php
                        $allSeries=DB::table('examessuedates')->where('is_deleted',0)->where('is_active',0)->select(['id','exam_name','slug'])->get();
                        @endphp
                        @foreach ($allSeries as $key => $series)
                            <a class="rbt-btn @if($key==0) btn-secondary @endif @if($key==1) btn-coral @endif @if($key==2) btn-violet @endif @if($key==3) btn-white @endif @if($key==4) btn-pink @endif" href="{{ url('exam-series',$series->slug) }}">{{ $series->exam_name }}</a>
                        @endforeach
                        {{-- <a class="rbt-btn btn-secondary" href="#">November 2023</a>
                        <a class="rbt-btn btn-coral" href="#">January 2023</a>
                        <a class="rbt-btn btn-violet" href="#">June 2023</a>
                        <a class="rbt-btn btn-white" href="#">November 2023</a>
                        <a class="rbt-btn btn-pink" href="#">November 2023</a> --}}
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="rbt-button-group">
                        @php
                        $allSeries=DB::table('examessuedates')->where('is_deleted',0)->where('is_active',0)->select(['id','exam_name','slug'])->get();
                        @endphp
                        @foreach ($allSeries as $key => $series)
                            <a class="rbt-btn @if($key==0) btn-secondary @endif @if($key==1) btn-coral @endif @if($key==2) btn-violet @endif @if($key==3) btn-white @endif @if($key==4) btn-pink @endif" href="{{ url('exam-series',$series->slug) }}">{{ $series->exam_name }}</a>
                        @endforeach
                        {{-- <a class="rbt-btn btn-secondary" href="#">November 2023</a>
                        <a class="rbt-btn btn-coral" href="#">January 2023</a>
                        <a class="rbt-btn btn-violet" href="#">June 2023</a>
                        <a class="rbt-btn btn-white" href="#">November 2023</a>
                        <a class="rbt-btn btn-pink" href="#">November 2023</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="rbt-button-area rbt-section-gap bg-color-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <span class="subtitle bg-primary-opacity">Text...............</span>
                        <h2 class="title">All Board</h2>
                    </div>
                </div>
            </div>
            <div class="row mt--50">
                <div class="col-lg-12">
                    <div class="rbt-button-group">
                        @php
                        $allBoard=DB::table('exam_board')->select(['id','board_name'])->get();
                    @endphp
                        @foreach ($allBoard as $key => $board)
                            <a class="rbt-btn @if($key==0) btn-secondary @endif @if($key==1) btn-coral @endif @if($key==2) btn-violet @endif @if($key==3) btn-white @endif @if($key==4) btn-pink @endif" href="#">{{ $board->board_name }}</a>
                        @endforeach
                        {{-- <a class="rbt-btn btn-secondary" href="#">November 2023</a>
                        <a class="rbt-btn btn-coral" href="#">January 2023</a>
                        <a class="rbt-btn btn-violet" href="#">June 2023</a>
                        <a class="rbt-btn btn-white" href="#">November 2023</a>
                        <a class="rbt-btn btn-pink" href="#">November 2023</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Button Area  -->
    <!-- Start Button Area  -->
    <div class="rbt-button-area rbt-section-gap bg-color-darker">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <span class="subtitle bg-white-opacity">Continue Shop</span>
                        <h2 class="title color-white">Click here to shop More Resources</h2>
                    </div>
                </div>
            </div>
            <div class="row mt--50">
                <div class="col-lg-12">
                    <div class="rbt-button-group">
                        <a class="rbt-btn btn-border radius-round color-white-off" href="{{ url('/shop') }}">All Resoure</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Button Area  -->
@endsection