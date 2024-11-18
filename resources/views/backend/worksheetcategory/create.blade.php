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
                <div>Work Sheet Category Manage</div>
            </div>
            <div class="page-title-actions">
                <div class="d-inline-block dropdown">
                    <a href="{{route('admin.category.index')}}">    <button type="button"  class="btn-shadow dropdown-toggle btn btn-info">
                            All Work Sheet Category
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
                        <h5 class="card-title">Work Sheet Category Create</h5>
                    <div>
                    <form action="{{url('/admin/worksheet-category/create')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="position-relative form-group"><label for="exampleFile" class="">Subject</label>
                            <select  class="form-control" name="subject_id"  placeholder="Enter Category Name">
                                <option disabled selected>Select</option>
                                @foreach ($allSubjects as $subject)
                                <option value="{{ $subject->id }}">{{ $subject->subject_name }}</option>
                                @endforeach
                                
                            </select>
                        </div>
                        <div class="position-relative form-group"><label for="exampleFile" class="">Category</label>
                            <input type="text" class="form-control" name="category_name"  placeholder="Enter Category Name">
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