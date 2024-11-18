<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubscriptionType;
use App\Models\MeritSubscription;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\YearGroup;
use App\Models\ResourceType;
use App\Models\MeritResource;
use Carbon\Carbon;
use DB;
use Auth;

class MerittutorsResourceController extends Controller
{
    public function __construct(){
        $this->middleware('auth:admin');
    }
//  create
    public function create(){
       $allCategory=Category::where('is_deleted',0)->get();
       $allYear=YearGroup::get();
       $allType=ResourceType::get();
       return view('backend.meritresource.create',compact('allCategory','allType','allYear'));
    }
// index
    public function index(){
        return view('backend.meritresource.index');
     }
// get SubCategory Ajax Request
    public function getSubcategory($cate_id){
        $data=SubCategory::where('is_active',1)->where('is_deleted',0)->where('category_id',$cate_id)->get();
        return response()->json($data);
    }
// store
    public function store(Request $request){
        
        $insert=MeritResource::insertGetId([
            'title'=>$request->title,
            'category'=>$request->category,
            'subcategory'=>$request->subcategory,
            'year'=>$request->year,
            'type'=>$request->type,
            'is_paid'=>$request->is_paid,
            'price'=>$request->price,
            'description'=>$request->description,
            'created_at'=>Carbon::now()->toDateTimeString()
        ]);
        if($request->hasFile('thumbnail_image')){
            $imagef = $request->file('thumbnail_image');
            $ImageName = $insert.'-Thumbnail' . '_' . time() . '.' . $imagef->getClientOriginalExtension();
            $newfile =$imagef->move('uploads/allresources/thumbnail/',$ImageName);
            MeritResource::where('id', $insert)->update([
                'thumbnail_image' => $ImageName,
            ]);
        }
        if($request->hasFile('demo_pdf')){
            $imagef = $request->file('demo_pdf');
            $ImageName = $insert.'-'.'demo_pdf' . '_' . time() . '.' . $imagef->getClientOriginalExtension();
            $newfile =$imagef->move('uploads/allresources/demopdf/',$ImageName);
            MeritResource::where('id', $insert)->update([
                'demo_pdf' => $ImageName,
            ]);
        }
        if($request->hasFile('main_file')){
            $imagef = $request->file('main_file');
            $ImageName = $insert.'-'.'main_file' . '_' . time() . '.' . $imagef->getClientOriginalExtension();
            $newfile =$imagef->move('uploads/allresources/mainfile/',$ImageName);
            MeritResource::where('id', $insert)->update([
                'main_file' => $ImageName,
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
}
