@extends('layouts.backend')
@section('content')
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-display1 icon-gradient bg-premium-dark">
                    </i>
                </div>
                <div>FAQ Update</div>
            </div>
            <div class="page-title-actions">
                <div class="d-inline-block dropdown">
                    <a href="{{route('admin.faq.index')}}">    <button type="button"  class="btn-shadow dropdown-toggle btn btn-info">
                            All FAQ
                        </button>
                        </a>
                    </div>
            </div>    
        </div>
    </div>      
    <div class="row">
        <div class="col-md-6">
            <div class="main-card mb-3 card">
                    <div class="card-body">
                        <h5 class="card-title">FAQ Update</h5>
                    <div>
                    <form action="{{url('/admin/faq/update')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="position-relative form-group"><label for="exampleFile" class="">Ques:</label>
                            <input type="text" class="form-control" name="faq_ques"  placeholder="Enter Ques" required value="{{ $edit->faq_ques }}">
                            <input type="hidden"  name="id" value="{{ $edit->id }}">
                        </div>
                        <br>
                        <div class="position-relative form-group"><label for="exampleFile" class="">Ans:</label>
                            <input type="text" class="form-control" name="faq_ans"  placeholder="Enter Ans" required value="{{ $edit->faq_ans }}">
                        </div>
                        <br>
                        <div class="input-group">
                            <button type="submit" class="mb-2 mr-2 btn btn-success">Submit</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection