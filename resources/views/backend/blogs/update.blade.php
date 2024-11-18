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
                <div>Blogs Manage</div>
            </div>
            <div class="page-title-actions">
                <div class="d-inline-block dropdown">
                    <a href="{{route('admin.blogs.index')}}">    <button type="button"  class="btn-shadow dropdown-toggle btn btn-info">
                            All Blogs
                        </button>
                        </a>
                    </div>
            </div>    
        </div>
    </div>      
    <div class="row">
        <div class="offset-2 col-md-8">
            <div class="main-card mb-3 card">
                    <div class="card-body">
                        <h5 class="card-title">Blog Update</h5>
                    <div>
                    <form action="{{url('/admin/blogs/update')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="position-relative form-group"><label for="exampleFile" class="">Title</label>
                            <input type="text" class="form-control" name="title"  placeholder="Enter Title" value="{{ $edit->title }}">
                            <input type="hidden"name="id" value="{{ $edit->id }}">
                                @error('title')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <br>
                        <div class="position-relative form-group"><label for="exampleFile" class="">Category</label>
                            <select class="form-control" name="category" id="category_id">
                                <option disabled selected>Select</option>
                                    @foreach ($allCategories as $cate)
                                        <option value="{{ $cate->id }}" {{ $edit->category == $cate->id ? 'selected' : '' }}>{{ $cate->name }}</option>
                                    @endforeach
                                </select>
                                @error('category')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                        </div>
                        <br>
                        <div class="position-relative form-group"><label for="exampleFile" class="">Tags</label>
                            <input type="text" class="form-control" name="tags"  placeholder="Enter Tags"  value="{{ $edit->tags }}">
                        </div>
                      
                        <br>
                        <div class="position-relative form-group"><label for="exampleFile" class="">Blog Details</label>
                            <textarea type="text" id="summernote" class="form-control" name="details"  placeholder="Enter Details"> {{ $edit->details }}</textarea>
                        </div>
                        @error('details')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                        <br>
                        <br>
                        <div class="position-relative form-group"><label for="exampleFile" class="">Image</label>
                            <input type="file" class="form-control" name="image" accept="jpg,jpeg,png">
                        </div>
                       
                        <br>
                        
                        <div class="input-group">
                            <button type="submit" class="mb-2 mr-2 btn btn-success">update</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection