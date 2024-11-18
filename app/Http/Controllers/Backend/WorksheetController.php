<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\ExamType;
use App\Models\PastPaper;
use App\Models\WorkSheet;
use App\Models\WorkSheetSubject;
use App\Models\WorkSheetCategory;
use App\Models\WorkSheetSubCategory;
use App\Models\WorkSheetReSubCategory;
use Auth;
use Carbon\Carbon;

class WorksheetController extends Controller
{
    public function __construct(){
        $this->middleware('auth:admin');
    }
    // create
    public function create(){
        $allSeries=DB::table('examessuedates')->get();
        $allBoard=DB::table('exam_board')->get();
        $allSubject=WorkSheetSubject::where('is_deleted',0)->where('is_active',1)->get();
        $allExamType=ExamType::where('is_deleted',0)->where('is_active',1)->get();
        return view('backend.worksheet.create',compact('allSeries','allBoard','allExamType','allSubject'));
    }
    // store
    public function store(Request $request){
        $insert=WorkSheet::insertGetId([
            
            'title'=>$request->title,
            'sub_title'=>$request->sub_title,
            'subject_id'=>$request->subject_id,
            'category_id'=>$request->category_id,
            'subcategory_id'=>$request->subcategory_id,
            'resubcategory_id'=>$request->resubcategory_id,
            'option_code'=>$request->option_code,
            'description'=>$request->description,
            'file_type'=>$request->file_type,
            'page_number'=>$request->page_number,
            'stripe_id'=>$request->stripe_id,

            'is_paid'=>$request->is_paid,
            'created_by'=>Auth::user()->id,
            'created_at'=>Carbon::now()->toDateTimeString(),
        ]);
        if($request->hasFile('main_file')){

            $imagef = $request->file('main_file');
            $ImageName = 'main_file' . '_' . time() . '.' . $imagef->getClientOriginalExtension();
            $newfile =$imagef->move(public_path('uploads/worksheet/mainfile/'),$ImageName);
            WorkSheet::where('id', $insert)->update([
                'main_file' => $ImageName,
            ]);

            }
            if($request->hasFile('thumbnail_image')){

                $imagefs = $request->file('thumbnail_image');
                $ImageName = 'thumbnail_image_' . '_' . time() . '.' . $imagefs->getClientOriginalExtension();
                $newfile =$imagefs->move(public_path('uploads/worksheet/thumbnail/'),$ImageName);
                WorkSheet::where('id', $insert)->update([
                    'thumbnail_image' => $ImageName,
                ]);
    
            }

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
        $allData=WorkSheet::where('is_deleted',0)->get();
        return view('backend.worksheet.index',compact('allData'));
    }
    // edit
    public function edit($id){

        $allSubject=WorkSheetSubject::where('is_deleted',0)->where('is_active',1)->get();
        $edit=WorkSheet::where('id',$id)->first();
        $allExamType=ExamType::where('is_deleted',0)->where('is_active',1)->get();
        return view('backend.worksheet.update',compact('edit','allSubject','allExamType'));
    }
    public function update(Request $request){
        $insert=WorkSheet::where('id',$request->id)->update([
            'title'=>$request->title,
            'sub_title'=>$request->sub_title,
            'subject_id'=>$request->subject_id,
            'category_id'=>$request->category_id,
            'subcategory_id'=>$request->subcategory_id,
            'resubcategory_id'=>$request->resubcategory_id,
            'option_code'=>$request->option_code,
            'description'=>$request->description,
            'stripe_id'=>$request->stripe_id,
            'file_type'=>$request->file_type,
            'page_number'=>$request->page_number,
            'is_paid'=>$request->is_paid,
            'created_by'=>Auth::user()->id,
            'updated_at'=>Carbon::now()->toDateTimeString(),
        ]);
        if($request->hasFile('main_file')){

            $imagef = $request->file('main_file');
            $ImageName = 'main_file' . '_' . time() . '.' . $imagef->getClientOriginalExtension();
            $newfile =$imagef->move(public_path('uploads/worksheet/mainfile/'),$ImageName);
            WorkSheet::where('id', $request->id)->update([
                'main_file' => $ImageName,
            ]);

            }
            if($request->hasFile('thumbnail_image')){

                $imagefs = $request->file('thumbnail_image');
                $ImageName = 'thumbnail_image_' . '_' . time() . '.' . $imagefs->getClientOriginalExtension();
                $newfile =$imagefs->move(public_path('uploads/worksheet/thumbnail/'),$ImageName);
                WorkSheet::where('id', $request->id)->update([
                    'thumbnail_image' => $ImageName,
                ]);
    
            }
        if($insert){
            $notification=array(
            'messege'=>'Updated success',
            'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);
        }else{
            $notification=array(
                'messege'=>'Updated Faild',
                'alert-type'=>'error'
                );
            return Redirect()->back()->with($notification);
        }
    }
    // delete
    public function delete($id){
        $delete=WorkSheet::where('id',$id)->update([
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
        $active=WorkSheet::where('id',$id)->update([
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
        $active=WorkSheet::where('id',$id)->update([
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
    // Get Subject
    public function getSubject($board_id,$exam_type){
        if($board_id==1){
            $allData=DB::table('subjects')->where('is_ac',1)->where('is_deleted',0)->where('exam_board','OCR')->where('exam_type',$exam_type)->get();
            return response()->json($allData);
        }
        if($board_id==2){
            $allData=DB::table('subjects')->where('is_ac',1)->where('is_deleted',0)->where('exam_board','Edexcel')->where('exam_type',$exam_type)->get();
            return response()->json($allData);
        }
        if($board_id==3){
            $allData=DB::table('subjects')->where('is_ac',1)->where('is_deleted',0)->where('exam_board','Cambridge CIE')->where('exam_type',$exam_type)->get();
            return response()->json($allData);
        }
        if($board_id==4){
            $allData=DB::table('subjects')->where('is_ac',1)->where('is_deleted',0)->where('exam_board','AQA')->where('exam_type',$exam_type)->get();
            return response()->json($allData);
        }
        if($board_id==5){
            $allData=DB::table('subjects')->where('is_ac',1)->where('is_deleted',0)->where('exam_board','WJEC')->where('exam_type',$exam_type)->get();
            return response()->json($allData);
        }
    }


    public function getCategory($subject_id){
        $allCategory=WorkSheetCategory::where('is_deleted',0)->where('is_active',1)->where('subject_id',$subject_id)->get();
        return response()->json($allCategory);
    }
    public function getSubCategory($cate_id){
        $allsubCategory=WorkSheetSubCategory::where('is_deleted',0)->where('is_active',1)->where('category_id',$cate_id)->get();
        return response()->json($allsubCategory);
    }
    public function getReSubCategory($subcate_id){
        $allResubCategory=WorkSheetReSubCategory::where('is_deleted',0)->where('is_active',1)->where('subcategory_id',$subcate_id)->get();
        return response()->json($allResubCategory);
    }
}
