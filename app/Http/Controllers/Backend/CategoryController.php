<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Carbon\Carbon;
use DB;
use Auth;
use Str;


class CategoryController extends Controller
{
    public function __construct(){
        $this->middleware('auth:admin');
    }
    // create
    public function create(){
        return view('backend.category.create');
    }
    // store
    public function store(Request $request){
        $insert=Category::insert([
            'category_name'=>$request->category_name,
            'slug' => Str::slug($request->category_name),
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
        $allData=Category::where('is_deleted',0)->get();
        return view('backend.category.index',compact('allData'));
    }
    // edit
    public function edit($id){
        $edit=Category::where('id',$id)->first();
        return view('backend.category.update',compact('edit'));
    }
    public function update(Request $request){
        $insert=Category::where('id',$request->id)->update([
            'category_name'=>$request->category_name,
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
        $delete=Category::where('id',$id)->update([
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
        $active=Category::where('id',$id)->update([
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
        $active=Category::where('id',$id)->update([
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
