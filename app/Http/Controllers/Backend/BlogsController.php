<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BlogCategory;
use App\Models\Blogs;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use Str;
use Auth;

class BlogsController extends Controller
{
    public function __construct(){
        $this->middleware('auth:admin');
    }
    // create
    public function create(){
        $allCategories=BlogCategory::where(['is_deleted'=>0,'is_active'=>1])->get();
        return view('backend.blogs.create',compact('allCategories'));
    }
     // store
     public function store(Request $request){
           // Validate the request data
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'tags' => 'required|string',
            'details' => 'required|string',
            'category' => 'required|string',
            'image' => 'required|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Insert the new blog record
        try {
            $insert = Blogs::insertGetId([
                'title' => $request->title,
                'tags' => $request->tags,
                'details' => $request->details,
                'category' => $request->category,
                'slug' => Str::slug($request->title),
                'created_by' => Auth::user()->id,
                'created_at' => Carbon::now()->toDateTimeString(),
            ]);

            if($request->hasFile('image')){
                $imagef = $request->file('image');
                $ImageName = 'blog' . '_' . time() . '.' . $imagef->getClientOriginalExtension();
                $newfile =$imagef->move(public_path('uploads/blogs/'),$ImageName);
                Blogs::where('id', $insert)->update([
                    'image' => $ImageName,
                ]);
            }
            // Check if insert was successful
            if ($insert) {
                $notification=array(
                    'messege'=>'Create success',
                    'alert-type'=>'success'
                    );
                    return Redirect()->back()->with($notification);
            }
        } catch (\Exception $e) {
            // Catch any error during insertion
            $notification=array(
                'messege'=>'Faild',
                'alert-type'=>'error'
                );
                return Redirect()->back()->with($notification);
        }

        $notification=array(
            'messege'=>'Faild',
            'alert-type'=>'error'
            );
            return Redirect()->back()->with($notification);
    }
     // index
    public function index(){
        $allData=Blogs::where('is_deleted',0)->get();
        return view('backend.blogs.index',compact('allData'));
    }
    // edit
    public function edit($id){
        $allCategories=BlogCategory::where(['is_deleted'=>0,'is_active'=>1])->get();
        $edit=Blogs::where('id',$id)->first();
        return view('backend.blogs.update',compact('edit','allCategories'));
    }
    public function update(Request $request){
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'tags' => 'required|string',
            'details' => 'required|string',
            'category' => 'required|string',
            // 'image' => 'required|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Insert the new blog record
        try {
            $insert = Blogs::where('id',$request->id)->update([
                'title' => $request->title,
                'tags' => $request->tags,
                'details' => $request->details,
                'category' => $request->category,
                'slug' => Str::slug($request->title),
                'created_by' => Auth::user()->id,
                'updated_at' => Carbon::now()->toDateTimeString(),
            ]);

            if($request->hasFile('image')){
                $imagef = $request->file('image');
                $ImageName = 'blog' . '_' . time() . '.' . $imagef->getClientOriginalExtension();
                $newfile =$imagef->move(public_path('uploads/blogs/'),$ImageName);
                Blogs::where('id', $insert)->update([
                    'image' => $ImageName,
                ]);
            }
            // Check if insert was successful
            if ($insert) {
                $notification=array(
                    'messege'=>'Update success',
                    'alert-type'=>'success'
                    );
                    return Redirect()->back()->with($notification);
            }
        } catch (\Exception $e) {
            // Catch any error during insertion
            $notification=array(
                'messege'=>'Update Faild',
                'alert-type'=>'error'
                );
                return Redirect()->back()->with($notification);
        }

        $notification=array(
            'messege'=>'Update Faild',
            'alert-type'=>'error'
            );
            return Redirect()->back()->with($notification);
    }
    // delete
    public function delete($id){
        $delete=Blogs::where('id',$id)->update([
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
        $active=Blogs::where('id',$id)->update([
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
        $active=Blogs::where('id',$id)->update([
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
