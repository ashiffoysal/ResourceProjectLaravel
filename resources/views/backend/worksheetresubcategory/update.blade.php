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
                <div>ReSubCategory Manage</div>
            </div>
            <div class="page-title-actions">
                <div class="d-inline-block dropdown">
                    <a href="{{route('admin.worksheetresubcategory.index')}}">    <button type="button"  class="btn-shadow dropdown-toggle btn btn-info">
                          All ReSubCategory
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
                        <h5 class="card-title">ReSubCategory Update</h5>
                    <div>
                    <form action="{{url('/admin/worksheet-resubcategory/update')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="position-relative form-group"><label for="exampleFile">ReSubCategory Name</label>
                            <input type="text" class="form-control" name="resubcategory_name" placeholder="Enter ReSubCategory Name" value="{{ $edit->resubcategory_name }}">
                        </div>
                        <br>
                        <div class="position-relative form-group"><label for="exampleFile">Category</label>
                            <select class="form-control" name="category_id" id="category_id" onchange="getSubCategory(this)">
                                <option disabled>Select</option>
                                @foreach ($allCategory as $cate)
                                <option value="{{ $cate->id }}" @if($edit->category_id==$cate->id) selected @endif>{{ $cate->category_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <br>
                        <div class="position-relative form-group"><label for="exampleFile">SubCategory</label>
                            <select class="form-control" name="subcategory_id" id="subcategory_id">
                                <option disabled>Select</option>
                                @php
                                    $allsubCategory=App\Models\WorkSheetSubCategory::where('is_deleted',0)->where('is_active',1)->where('category_id',$edit->category_id)->get();
                                @endphp
                                @foreach ($allsubCategory as $scate)
                                <option value="{{ $scate->id }}" @if($edit->subcategory_id==$scate->id) selected @endif>{{ $scate->subcategory_name }}</option>
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
<script>
    function getSubCategory(el){
    
         
         var cate_id=$("#category_id").val();
         
           if(cate_id) {
              $.ajax({
                  url: "{{  url('get/admin/worksheet-ajax/subcategory/') }}/"+cate_id,
                  type:"GET",
                  dataType:"json",
                  success:function(data) {
                    
                         $('#subcategory_id').empty();
                         $('#subcategory_id').append('<option selected disabled>Select</option>');
                         $.each(data,function(index,districtObj){
 
                          $('#subcategory_id').append('<option value="' + districtObj.id + '">'+districtObj.subcategory_name+'</option>');
                          
                        });
                             
                         
 
                      }
              });
          } else {
              alert('sorry data not found');
          }
         
    }

 </script>
@endsection