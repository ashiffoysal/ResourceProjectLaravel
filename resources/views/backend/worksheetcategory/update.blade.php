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
                        <div>Worksheet Category Manage</div>
                    </div>
                    <div class="page-title-actions">
                        <button type="button" data-toggle="tooltip" title="Example Tooltip" data-placement="bottom" class="btn-shadow mr-3 btn btn-dark">
                            <i class="fa fa-star"></i>
                        </button>
                    </div>    
                </div>
            </div>            
            <div class="row">
                <div class="col-md-6">
                    <div class="main-card mb-3 card">
                            <div class="card-body">
                                <h5 class="card-title">Worksheet Category Update</h5>
                            <div>
                            <form action="{{url('/admin/worksheet-category/update')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="position-relative form-group"><label for="exampleFile" class="">Subject</label>
                                    <select  class="form-control" name="subject_id"  placeholder="Enter Category Name">
                                        <option disabled selected>Select</option>
                                        @foreach ($allSubjects as $subject)
                                        <option value="{{ $subject->id }}" @if($subject->id==$edit->subject_id) selected @endif>{{ $subject->subject_name }}</option>
                                        @endforeach
                                        
                                    </select>
                                </div>
                                <div class="position-relative form-group"><label for="exampleFile" class="">Category</label>
                                    <input type="text" class="form-control" name="category_name"  placeholder="Enter Category Name" value="{{ $edit->category_name }}">
                                    <input type="hidden"  name="id"  value="{{ $edit->id }}">
                                </div>
                                <br>
                                <div class="input-group">
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