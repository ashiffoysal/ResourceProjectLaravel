<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\WorkSheetCategory;
use App\Models\WorkSheetSubject;
use App\Models\WorkSheetSubCategory;
use App\Models\WorkSheetReSubCategory;
use DB;
use Auth;

class WorksheetReSubCategoryController extends Controller
{
    public function __construct(){
        $this->middleware('auth:admin');
    }
    // create
    public function create(){
        $allCategory=WorkSheetCategory::where('is_deleted',0)->get();
        return view('backend.worksheetresubcategory.create',compact('allCategory'));
    }
    // store
    public function store(Request $request){
        $insert=WorkSheetReSubCategory::insert([
            'resubcategory_name'=>$request->resubcategory_name,
            'category_id'=>$request->category_id,
            'subcategory_id'=>$request->subcategory_id,
            'created_by'=>Auth::user()->id,
            'created_at'=>Carbon::now()->toDateTimeString(),
        ]);
        if($insert){
            $notification=array(
            'messege'=>'Create success',
            'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);
        }else{
            $notification=array(
                'messege'=>'Create Faild',
                'alert-type'=>'error'
                );
            return Redirect()->back()->with($notification);
        }
    }
     // index
    public function index(){
        $allData=WorkSheetReSubCategory::where('is_deleted',0)->get();
        return view('backend.worksheetresubcategory.index',compact('allData'));
    }
    // edit
    public function edit($id){
        $edit=WorkSheetReSubCategory::where('id',$id)->first();
        $allCategory=WorkSheetCategory::where('is_deleted',0)->get();
        return view('backend.worksheetresubcategory.update',compact('edit','allCategory'));
    }
    public function update(Request $request){
        $insert=WorkSheetReSubCategory::where('id',$request->id)->update([
            'resubcategory_name'=>$request->resubcategory_name,
            'category_id'=>$request->category_id,
            'subcategory_id'=>$request->subcategory_id,
            'category_id'=>$request->category_id,
            'updated_by'=>Auth::user()->id,
            'updated_at'=>Carbon::now()->toDateTimeString(),
        ]);
        if($insert){
            $notification=array(
            'messege'=>'Create success',
            'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);
        }else{
            $notification=array(
                'messege'=>'Create Faild',
                'alert-type'=>'error'
                );
            return Redirect()->back()->with($notification);
        }
    }
    // delete
    public function delete($id){
        $delete=WorkSheetReSubCategory::where('id',$id)->update([
            'is_deleted'=>1,
            'deleted_by'=>Auth::user()->id,
        ]);
        if($delete){
            $notification=array(
            'messege'=>'Delete success',
            'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);
        }else{
            $notification=array(
                'messege'=>'Delete Faild',
                'alert-type'=>'error'
                );
            return Redirect()->back()->with($notification);
        }
    }
    // active
    public function active($id){
        $active=WorkSheetReSubCategory::where('id',$id)->update([
            'is_active'=>1,
        ]);
        if($active){
            $notification=array(
            'messege'=>'Update success',
            'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);
        }else{
            $notification=array(
                'messege'=>'Update Faild',
                'alert-type'=>'error'
                );
            return Redirect()->back()->with($notification);
        }
    }
    // DeActive
    public function deActive($id){
        $active=WorkSheetReSubCategory::where('id',$id)->update([
            'is_active'=>0,
        ]);
        if($active){
            $notification=array(
            'messege'=>'Update success',
            'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);
        }else{
            $notification=array(
                'messege'=>'Update Faild',
                'alert-type'=>'error'
                );
            return Redirect()->back()->with($notification);
        }
    }
    public function getSubcategory($cate_id){
        $allData=WorkSheetSubCategory::where('is_deleted',0)->where('is_active',1)->where('category_id',$cate_id)->get();
        return response()->json($allData);
    }
}
