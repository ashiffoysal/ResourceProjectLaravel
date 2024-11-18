<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\WorkSheetCategory;
use App\Models\WorkSheetSubject;
use App\Models\WorkSheetSubCategory;
use DB;
use Auth;

class WorksheetSubCategoryController extends Controller
{
    public function __construct(){
        $this->middleware('auth:admin');
    }
    // create
    public function create(){
        $allCategory=WorkSheetCategory::where('is_deleted',0)->get();
        return view('backend.worksheetsubcategory.create',compact('allCategory'));
    }
    // store
    public function store(Request $request){
        $insert=WorkSheetSubCategory::insert([
            'subcategory_name'=>$request->subcategory_name,
            'category_id'=>$request->category_id,
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
        $allData=WorkSheetSubCategory::where('is_deleted',0)->get();
        return view('backend.worksheetsubcategory.index',compact('allData'));
    }
    // edit
    public function edit($id){
        $edit=WorkSheetSubCategory::where('id',$id)->first();
        $allCategory=Category::where('is_deleted',0)->get();
        return view('backend.worksheetsubcategory.update',compact('edit','allCategory'));
    }
    public function update(Request $request){
        $insert=WorkSheetSubCategory::where('id',$request->id)->update([
            'subcategory_name'=>$request->subcategory_name,
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
        $delete=WorkSheetSubCategory::where('id',$id)->update([
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
        $active=WorkSheetSubCategory::where('id',$id)->update([
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
        $active=WorkSheetSubCategory::where('id',$id)->update([
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

}
