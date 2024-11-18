@extends('layouts.frontend')
@section('content')
<style>
    .ptb--100 {
    padding: 30px 0 !important;
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
    <div class="wishlist_area bg-color-white rbt-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p><span>GCSE Past Papers (Edexcel)</span></p>
                    <form action="#">
                        <div class="cart-table table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                
                                        <th class="pro-title">Board & Subject</th>
                                        <th class="pro-price">Unit Code</th>
                                        <th class="pro-quantity"></th>
                                        <th class="pro-subtotal"></th>
                                        <th class="pro-remove">More</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($allEdexcelSubject as $subjects)
                                    <tr>
                                        <td class="pro-title">Edexcel GCSE {{ $subjects->subject_name }}</td>
                                        <td class="pro-price">{{ $subjects->unit_code }}</td>
                                        <td class="pro-quantity"></td>
                                        <td class="pro-addtocart"></td>
                                        <td class="pro-price"><a class="rbt-btn btn-coral" href="{{ url('past-papers/details',$subjects->id) }}">View Resource</a></td>
                                    </tr>
                                    @endforeach
                                 
                                </tbody>
                            </table>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row">
                <div class="col-12">
                    <p><span>GCSE Past Papers (AQA)</span></p>
                    <form action="#">
                        <div class="cart-table table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                
                                        <th class="pro-title">Board & Subject</th>
                                        <th class="pro-price">Unit Code</th>
                                        <th class="pro-quantity"></th>
                                        <th class="pro-subtotal"></th>
                                        <th class="pro-remove">More</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($allAqaSubject as $subjects)
                                    <tr>
                                        <td class="pro-title">AQA GCSE {{ $subjects->subject_name }}</td>
                                        <td class="pro-price">{{ $subjects->unit_code }}</td>
                                        <td class="pro-quantity"></td>
                                        <td class="pro-addtocart"></td>
                                        <td class="pro-price"><a class="rbt-btn btn-coral" href="#">View Resource</a></td>
                                    </tr>
                                    @endforeach
                                 
                                </tbody>
                            </table>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row">
                <div class="col-12">
                    <p><span>GCSE Past Papers (OCR)</span></p>
                    <form action="#">
                        <div class="cart-table table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                
                                        <th class="pro-title">Board & Subject</th>
                                        <th class="pro-price">Unit Code</th>
                                        <th class="pro-quantity"></th>
                                        <th class="pro-subtotal"></th>
                                        <th class="pro-remove">More</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($allOcrSubject as $subjects)
                                    <tr>
                                        <td class="pro-title">OCR GCSE {{ $subjects->subject_name }}</td>
                                        <td class="pro-price">{{ $subjects->unit_code }}</td>
                                        <td class="pro-quantity"></td>
                                        <td class="pro-addtocart"></td>
                                        <td class="pro-price"><a class="rbt-btn btn-coral" href="#">View Resource</a></td>
                                    </tr>
                                    @endforeach
                                 
                                </tbody>
                            </table>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row">
                <div class="col-12">
                    <p><span>GCSE Past Papers (WJEC)</span></p>
                    <form action="#">
                        <div class="cart-table table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                
                                        <th class="pro-title">Board & Subject</th>
                                        <th class="pro-price">Unit Code</th>
                                        <th class="pro-quantity"></th>
                                        <th class="pro-subtotal"></th>
                                        <th class="pro-remove">More</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($allOcrSubject as $subjects)
                                    <tr>
                                        <td class="pro-title">WJEC GCSE {{ $subjects->subject_name }}</td>
                                        <td class="pro-price">{{ $subjects->unit_code }}</td>
                                        <td class="pro-quantity"></td>
                                        <td class="pro-addtocart"></td>
                                        <td class="pro-price"><a class="rbt-btn btn-coral" href="#">View Resource</a></td>
                                    </tr>
                                    @endforeach
                                 
                                </tbody>
                            </table>
                        </div>

                    </form>
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
                        <span class="subtitle bg-white-opacity">Button Border</span>
                        <h2 class="title color-white">Dark BG Border variation.</h2>
                    </div>
                </div>
            </div>
            <div class="row mt--50">
                <div class="col-lg-12">
                    <div class="rbt-button-group">
                        <a class="rbt-btn btn-border radius-round color-white-off" href="#">Histudy Button</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Button Area  -->
@endsection