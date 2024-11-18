@extends('layouts.backend')
@section('content')
@php
$allSubcategory=App\Models\SubCategory::where('is_deleted',0)->where('is_active',1)->where('category_id',$edit->category)->get();
$allReSubcategory=App\Models\ReSubCategory::where('is_deleted',0)->where('is_active',1)->where('subcategory_id',$edit->subcategory)->get();
@endphp
<style>
    label {
        
        margin-bottom: .5rem;
        font-size: 16px;
        font-weight: 600;
    }
    </style>
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-display1 icon-gradient bg-premium-dark">
                    </i>
                </div>
                <div>Past Paper Update</div>
            </div>
            <div class="page-title-actions">
                <button type="button" data-toggle="tooltip" title="Example Tooltip" data-placement="bottom" class="btn-shadow mr-3 btn btn-dark">
                    <i class="fa fa-star"></i>
                </button>
                <div class="d-inline-block dropdown">
                    <a href="{{route('admin.past-paper.index')}}">
                    <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-info">
                        <span class="btn-icon-wrapper pr-2 opacity-7">
                            <i class="fa fa-business-time fa-w-20"></i>
                        </span>
                        ALL PAST PAPERS 
                    </button>
                </a>
                
                </div>
            </div>    
        </div>
    </div>     
    <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-10">
            <div class="main-card mb-3 card">
                    <div class="card-body">
                        <h5 class="card-title">Update Past Papers</h5>
                    <div>
                    <form action="{{url('admin/past-paper/update')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="position-relative form-group"><label for="exampleFile" class="">Title</label>
                            <input type="hidden" name="id" value="{{ $edit->id }}">
                            <input type="text" class="form-control" name="title" placeholder="Enter Past Paper Title" required value="{{ $edit->title }}">
                            @if ($errors->has('title'))
                                <div class="text-danger">{{ $errors->first('title') }}</div>
                            @endif
                        </div>
                        <br>
                        <div class="position-relative form-group">
                        <label for="uname">Series</label>
                        <select class="form-control" name="exam_series" id="series">
                            <option disabled selected>Select</option>
                            @foreach ($examSeries as $series)
                                <option value="{{ $series->id }}" @if($edit->exam_series==$series->id) selected @endif>{{ $series->name }}</option>
                            @endforeach
                        </select>
                            @if ($errors->has('exam_series'))
                            <div class="text-danger">{{ $errors->first('exam_series') }}</div>
                            @endif
                        </div>
                        <br>
                        <div class="position-relative form-group">
                            <label for="exampleFile" class="">Category</label>
                            <select class="form-control" name="category" onchange="getCategory(this)" id="category" required>
                                <option disabled selected>Select</option>
                                @foreach ($allCategory as $category)
                                <option value="{{ $category->id }}" @if($edit->category==$category->id) selected @endif>{{ $category->category_name }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('category'))
                            <div class="text-danger">{{ $errors->first('category') }}</div>
                            @endif
                        </div>
                        <br>
                        <div class="position-relative form-group">
                            <label for="exampleFile" class="">SubCategory</label>
                           
                            <select class="form-control" name="subcategory" onchange="getSubCategory(this)" id="subcategory" required>
                                <option disabled selected>Select</option>
                                @foreach ($allSubcategory as $subcategory)
                                <option value="{{ $subcategory->id }}" @if($edit->subcategory==$subcategory->id) selected @endif>{{ $subcategory->subcategory_name }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('subcategory'))
                            <div class="text-danger">{{ $errors->first('subcategory') }}</div>
                            @endif
                        </div>
                        <br>
                        <div class="position-relative form-group">
                            <label for="exampleFile" class="">ReSubCategory</label>
                            <select class="form-control" name="resubcategory"  id="resubcategory" required>
                                <option disabled selected>Select</option>
                                @foreach ($allReSubcategory as $resubcategory)
                                <option value="{{ $resubcategory->id }}" @if($edit->resubcategory==$resubcategory->id) selected @endif>{{ $resubcategory->resubcategory_name }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('resubcategory'))
                            <div class="text-danger">{{ $errors->first('resubcategory') }}</div>
                            @endif
                        </div>
                        <br>
                        <div class="position-relative form-group">
                            <label for="cname">Question Paper (PDF File)</label><br>
                            <input type="file"  name="ques_paper" required> 
                            <br>
                            <br>
                            <a href="{{ asset('uploads/pastpaper/'.$edit->ques_paper) }}" class="btn btn-success">File</a>
                            @if ($errors->has('ques_paper'))
                            <div class="text-danger">{{ $errors->first('ques_paper') }}</div>
                            @endif
                        </div>
                        <br>
                        <div class="position-relative form-group">
                        <label for="cname">
                            Mark Scheme (PDF File)</label><br>
                        <input type="file" name="ans_paper" required>
                        <br>
                        <br>
                        <a href="{{ asset('uploads/pastpaper/'.$edit->ans_paper) }}" class="btn btn-success">File</a>
                            @if ($errors->has('ans_paper'))
                            <div class="text-danger">{{ $errors->first('ans_paper') }}</div>
                            @endif
                        </div>
                        <br>
                        <div class="position-relative form-group">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="is_paid" id="inlineRadio1" value="1" @if($edit->is_paid==1) checked @endif>
                            <label class="form-check-label" for="inlineRadio1">Paid</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="is_paid" id="inlineRadio2" value="0"  @if($edit->is_paid==0) checked @endif>
                            <label class="form-check-label" for="inlineRadio2">Free</label>
                          </div>
                        </div>
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
<script>
    function getCategory(el){
    
       
         var category=$("#category").val();
         
           if(category) {
              $.ajax({
                  url: "{{  url('get/admin/allsubcategory/') }}/"+category,
                  type:"GET",
                  dataType:"json",
                  success:function(data) {
                    
                         $('#subcategory').empty();
                         $('#subcategory').append('<option selected disabled>Select</option>');
                         $.each(data,function(index,districtObj){
 
                          $('#subcategory').append('<option value="' + districtObj.id + '">'+districtObj.subcategory_name+'</option>');
                          
                        });
                             
                         
 
                      }
              });
          } else {
              alert('sorry data not found');
          }
     
    }
    // getSubCategory
    function getSubCategory(el){
    
       
    var subcategory=$("#subcategory").val();
    
      if(subcategory) {
         $.ajax({
             url: "{{  url('get/admin/allresubcategory/') }}/"+subcategory,
             type:"GET",
             dataType:"json",
             success:function(data) {
               
                    $('#resubcategory').empty();
                    $('#resubcategory').append('<option selected disabled>Select</option>');
                    $.each(data,function(index,districtObj){

                     $('#resubcategory').append('<option value="' + districtObj.id + '">'+districtObj.resubcategory_name+'</option>');
                     
                   });
                        
                    

                 }
         });
     } else {
         alert('sorry data not found');
     }

}
 </script>
@endsection