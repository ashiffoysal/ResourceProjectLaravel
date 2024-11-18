<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\ExamType;
use App\Models\PastPaper;
use App\Models\Category;
use App\Models\PastPaperYear;
use App\Models\SubCategory;
use App\Models\Resubcategory;
use Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;

class PastPaperController extends Controller
{
    public function __construct(){
        $this->middleware('auth:admin');
    }
    // create
    public function create(){

        $examSeries = PastPaperYear::where(['is_active' => 1, 'is_deleted' => 0])
            ->orderBy('id', 'DESC')
            ->get();
        $allCategory = Category::where(['is_active' => 1, 'is_deleted' => 0])
            ->orderBy('id', 'DESC')
            ->get();
        return view('backend.pastpaper.create',compact('examSeries','allCategory'));
    }
    // store
    public function store(Request $request){
    // Validate the incoming request data
    $validator = Validator::make($request->all(), [
        'title' => 'required|string|max:255',
        'category' => 'required|string',
        'subcategory' => 'required|string',
        'resubcategory' => 'nullable|string',
        'is_paid' => 'required|boolean',
        'ques_paper' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
        'ans_paper' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
    ]);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    // Insert the data into the database
    $insert = PastPaper::insertGetId([
        'title' => $request->title,
        'exam_series'=>$request->exam_series,
        'uploads_type' => 'PASTPAPER',
        'category' => $request->category,
        'subcategory' => $request->subcategory,
        'resubcategory' => $request->resubcategory,
        'is_paid' => $request->is_paid,
        'created_by' => Auth::user()->id,
        'created_at' => Carbon::now()->toDateTimeString(),
    ]);

    // Handle 'ques_paper' file upload
    if ($request->hasFile('ques_paper')) {
        $imagef = $request->file('ques_paper');
        $imageName = 'ques_paper_' . time() . '.' . $imagef->getClientOriginalExtension();
        $imagef->move('uploads/pastpaper/', $imageName);

        PastPaper::where('id', $insert)->update([
            'ques_paper' => $imageName,
        ]);
    }

    // Handle 'ans_paper' file upload
    if ($request->hasFile('ans_paper')) {
        $imagefs = $request->file('ans_paper');
        $imageName = 'ans_paper_' . time() . '.' . $imagefs->getClientOriginalExtension();
        $imagefs->move('uploads/pastpaper/', $imageName);

        PastPaper::where('id', $insert)->update([
            'ans_paper' => $imageName,
        ]);
    }

    // Return success or error notification
    if ($insert) {
        $notification = [
            'messege' => 'Create success',
            'alert-type' => 'success'
        ];
        return redirect()->back()->with($notification);
    } else {
        $notification = [
            'messege' => 'Create Failed',
            'alert-type' => 'error'
        ];
        return redirect()->back()->with($notification);
    }
    }
     // index
    public function index(){
        $allData=PastPaper::where('is_deleted',0)->get();
        return view('backend.pastpaper.index',compact('allData'));
    }
    // edit
    public function edit($id){
        
        $edit = PastPaper::find($id);
        $examSeries = PastPaperYear::where(['is_active' => 1, 'is_deleted' => 0])
        ->orderBy('id', 'DESC')
        ->get();
        $allCategory = Category::where(['is_active' => 1, 'is_deleted' => 0])
        ->orderBy('id', 'DESC')
        ->get();
        return view('backend.pastpaper.update',compact('edit','examSeries','allCategory'));
    }
    public function update(Request $request){
        $insert=PastPaper::where('id',$request->id)->update([
            'title' => $request->title,
            'exam_series'=>$request->exam_series,
            'uploads_type' => 'PASTPAPER',
            'category' => $request->category,
            'subcategory' => $request->subcategory,
            'resubcategory' => $request->resubcategory,
            'is_paid' => $request->is_paid,
            'created_by' => Auth::user()->id,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at'=>Carbon::now()->toDateTimeString(),
        ]);
        if($request->hasFile('ques_paper')){

            $imagef = $request->file('ques_paper');
            $ImageName = 'ques_paper_' . '_' . time() . '.' . $imagef->getClientOriginalExtension();
            $newfile =$imagef->move('uploads/pastpaper/',$ImageName);
            PastPaper::where('id', $request->id)->update([
                'ques_paper' => $ImageName,
            ]);

        }
        if($request->hasFile('ans_paper')){

            $imagefs = $request->file('ans_paper');
            $ImageName = 'ans_paper' . '_' . time() . '.' . $imagefs->getClientOriginalExtension();
            $newfile =$imagefs->move('uploads/pastpaper/',$ImageName);
            PastPaper::where('id', $request->id)->update([
                'ans_paper' => $ImageName,
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
    // delete
    public function delete($id){
        $delete=PastPaper::where('id',$id)->update([
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
        $active=PastPaper::where('id',$id)->update([
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
        $active=PastPaper::where('id',$id)->update([
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
    // Get subcategory
    public function getSubcategory($category){
        $allSubactegory = SubCategory::where([
            'category_id' => $category,
            'is_deleted' => 0,
            'is_active' => 1
        ])
        ->get();
        return response()->json($allSubactegory);
    }
    // Get resubcategory
    public function getReSubcategory($subcategory){
        $allreSubcategory = Resubcategory::where([
            'subcategory_id' => $subcategory,
            'is_deleted' => 0,
            'is_active' => 1
        ])
        ->get();
        return response()->json($allreSubcategory);
    }
}
