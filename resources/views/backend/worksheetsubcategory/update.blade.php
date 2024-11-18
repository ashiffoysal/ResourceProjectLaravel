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
                    <a href="{{route('admin.worksheetsubcategory.index')}}">    <button type="button"  class="btn-shadow dropdown-toggle btn btn-info">
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
                        <h5 class="card-title">SubCategory Update</h5>
                    <div>
                    <form action="{{url('/admin/worksheet-subcategory/update')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="position-relative form-group"><label for="exampleFile">SubCategory Name</label>
                            <input type="text" class="form-control" name="subcategory_name" placeholder="Enter SubCategory Name" value="{{ $edit->subcategory_name }}">
                        </div>
                        <br>
                        <div class="position-relative form-group"><label for="exampleFile">Category</label>
                            <select class="form-control" name="category_id">
                                <option disabled>Select</option>
                                @foreach ($allCategory as $cate)
                                <option value="{{ $cate->id }}" @if($edit->category_id==$cate->id) selected @endif>{{ $cate->category_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <br>
                        <div class="input-group">
                            <input type="hidden"  name="id"  value="{{ $edit->id }}">
                            <button type="submit" class="mb-2 mr-2 btn btn-success">Update</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection