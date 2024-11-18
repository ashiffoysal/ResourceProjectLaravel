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
                <div>SubCategory Manage</div>
            </div>
            <div class="page-title-actions">
                <div class="d-inline-block dropdown">
                    <a href="{{route('admin.subcategory.index')}}">    <button type="button"  class="btn-shadow dropdown-toggle btn btn-info">
                            All SubCategory
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
                        <h5 class="card-title">SubCategory Create</h5>
                    <div>
                    <form action="{{url('/admin/subcategory/create')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="position-relative form-group"><label for="exampleFile" class="">SubCategory Name</label>
                            <input type="text" class="form-control" name="subcategory_name"  placeholder="Enter SubCategory Name">
                        </div>
                        <br>
                          
                        <div class="position-relative form-group"><label for="exampleFile" class="">Category</label>
                            <select class="form-control" name="category_id">
                                <option disabled selected>Select</option>
                                @foreach ($allCategory as $cate)
                                <option value="{{ $cate->id }}">{{ $cate->category_name }}</option>
                                @endforeach
                            </select>
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