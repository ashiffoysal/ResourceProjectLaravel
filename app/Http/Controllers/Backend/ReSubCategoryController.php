<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\MainType;
use Carbon\Carbon;
use Validator;
use App\Models\ReSubCategory;
use DB;
use Auth;
use Str;

class ReSubCategoryController extends Controller
{
    public function __construct(){
        $this->middleware('auth:admin');
    }
    // create
    public function create(){
        $allCategories = Category::notDeleted()
        ->select(['category_name', 'id'])
        ->get();
        
        $maintype=MainType::get();
        return view('backend.resubcategory.create',compact('allCategories','maintype'));
    }
    // store
    public function store(Request $request){
        // Define validation rules
        $validator = Validator::make($request->all(), [
            'resubcategory_name' => 'required|string|max:255',
            'category_id' => 'required|integer|exists:categories,id',
            'subcategory_id' => 'required|integer|exists:sub_categories,id',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Insert into ReSubCategory table
        $insert = ReSubCategory::insert([
            'resubcategory_name' => $request->resubcategory_name,
            'unit_code'=>$request->unit_code,
            'slug' => Str::slug($request->resubcategory_name),
            'category_id' => $request->category_id,
            'subcategory_id' => $request->subcategory_id,
            'past_papers' => $request->has('past_papers') ? 1 : 0,
            'revision_notes' => $request->has('revision_notes') ? 1 : 0,
            'exam_questions' => $request->has('exam_questions') ? 1 : 0,
            'flashcards' => $request->has('flashcards') ? 1 : 0,
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);

        // Return notification message based on insert status
        if ($insert) {
            $notification = [
                'messege' => 'Create success',
                'alert-type' => 'success'
            ];
        } else {
            $notification = [
                'messege' => 'Create Failed',
                'alert-type' => 'error'
            ];
        }
        return redirect()->back()->with($notification);
    }
     // index
    public function index(){
        $allData=ReSubCategory::where('is_deleted',0)->get();
        return view('backend.resubcategory.index',compact('allData'));
    }
    // edit
    public function edit($id){
        $edit=ReSubCategory::where('id',$id)->first();
        $allCategories=Category::where('is_deleted',0)->get();
        return view('backend.resubcategory.update',compact('edit','allCategories'));
    }
    public function update(Request $request){
               // Define validation rules
            $validator = Validator::make($request->all(), [
                'resubcategory_name' => 'required|string|max:255',
                'category_id' => 'required|integer|exists:categories,id',
                'subcategory_id' => 'required|integer|exists:sub_categories,id',
            ]);
            // Check if validation fails
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
            // Insert into ReSubCategory table
            $update = ReSubCategory::where('id',$request->id)->update([
                'resubcategory_name' => $request->resubcategory_name,
                'unit_code'=>$request->unit_code,
                'slug' => Str::slug($request->resubcategory_name),
                'category_id' => $request->category_id,
                'subcategory_id' => $request->subcategory_id,
                'past_papers' => $request->has('past_papers') ? 1 : 0,
                'revision_notes' => $request->has('revision_notes') ? 1 : 0,
                'exam_questions' => $request->has('exam_questions') ? 1 : 0,
                'flashcards' => $request->has('flashcards') ? 1 : 0,
                'updated_at' => Carbon::now()->toDateTimeString(),
            ]);
            // Return notification message based on insert status
            if ($update) {
                $notification = [
                    'messege' => 'update success',
                    'alert-type' => 'success'
                ];
            } else {
                $notification = [
                    'messege' => 'update Failed',
                    'alert-type' => 'error'
                ];
            }
            return redirect()->back()->with($notification);
    }
    // delete
    public function delete($id){
        $delete=ReSubCategory::where('id',$id)->update([
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
        $active=ReSubCategory::where('id',$id)->update([
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
        $active=ReSubCategory::where('id',$id)->update([
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
    // ajax get Resubcategory
    public function getSubcategory($cate_id){
        $data=SubCategory::where('category_id',$cate_id)->select(['subcategory_name','id'])->get();
        return response()->json($data);
    }
}
