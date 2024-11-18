<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Settings;
use App\models\Contact;
use App\Models\MeritSubscription;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Resubcategory;
use App\Models\MeritResource;
use App\Models\PastPaper;
use App\Models\Blogs;
use Validator;
use DB;
use Carbon\Carbon;

class FrontendController extends Controller
{
    // Home
    public function home(){
        $allBlogs = Blogs::where(['is_deleted' => 0, 'is_active' => 1])->orderBy('id','DESC')->select(['id','slug','title','created_at'])->limit(3)->get();
        return view('frontend.home.index',compact('allBlogs'));
    }
    // About us
    public function aboutUs(){
        return view('frontend.aboutus.index');
    }
    // Contact us
    public function contactUs(){
        return view('frontend.contact.index');
    }
    // Store
    public function contactUsStore(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|digits_between:10,15',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:1000',
        ]);
    
        // If validation fails
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
    
        // Inserting data
        $insert = Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'message' => $request->message,
            'created_at'=>Carbon::now()->toDateTimeString(),
        ]);
    
        // Handling response based on insert operation
        if ($insert) {
            return redirect()->back()->with([
                'message' => 'Contact Message Sent',
                'alert-type' => 'success'
            ]);
        } else {
            return redirect()->back()->with([
                'message' => 'Error! Please Try Again',
                'alert-type' => 'error'
            ]);
        }
    }
    // faq
    public function faq(){
        return view('frontend.faq.index');
    }
    // Privacy Policy
    public function privacyPolicy(){
        $privacyPolicy=Settings::where('key','privacy_policy')->first();
        return view('frontend.privacypolicy.index',compact('privacyPolicy'));
    }
    // Terms & Condition
    public function termsCondition(){
        $termsandCondition=Settings::where('key','terms_condition')->first();
        return view('frontend.termscondition.index',compact('termsandCondition'));
    }
    // Shop
    public function shop(){
        $allData=MeritResource::where('is_deleted',0)->where('is_active',1)->orderBy('id','DESC')->get();
        return view('frontend.shop.index',compact('allData'));
    }
    // School Pricing
    public function schoolPricing(){
        // monthly
        $allMonthly = MeritSubscription::where([
            ['is_deleted', 0],
            ['is_active', 1],
            ['type', 1],
            ['subscription_type', 1],
        ])->get();
        // yearly
        $allYearly = MeritSubscription::where([
            ['is_deleted', 0],
            ['is_active', 1],
            ['type', 1],
            ['subscription_type', 2],
        ])->get();
        return view('frontend.pricing.schools',compact('allMonthly','allYearly'));
    }
    // Individuals Pricing
    public function individualsPricing(){
        $allMonthly = MeritSubscription::where([
            ['is_deleted', 0],
            ['is_active', 1],
            ['type', 2],
            ['subscription_type', 1],
        ])->get();
        
        $allYearly = MeritSubscription::where([
            ['is_deleted', 0],
            ['is_active', 1],
            ['type', 2],
            ['subscription_type', 2],
        ])->get();        
        return view('frontend.pricing.individuals',compact('allMonthly','allYearly'));
    }

 
    // past paper
    // public function pastPaper(){
    //     return view('frontend.pastpapers.index');
    // }
    // Exam Series
    public function examSeries($series){
        // $allSeries=DB::table('examessuedates')->where('slug',$series)->first();
        return view('frontend.examseries.index',compact('series'));
    }
    // exam Subjects
    // public function exampapersubjects($series,$board){
    //     return view('frontend.pastpapers.subjectslist');
    // }
    public function SubjectlistGcse(){

        $allEdexcelSubject=DB::table('subjects')->where('exam_board','Edexcel')->where('exam_type','GCSE')->where('is_ac',1)->where('is_deleted',0)->get();
        $allAqaSubject=DB::table('subjects')->where('exam_board','AQA')->where('exam_type','GCSE')->where('is_ac',1)->where('is_deleted',0)->get();
        $allOcrSubject=DB::table('subjects')->where('exam_board','OCR')->where('exam_type','GCSE')->where('is_ac',1)->where('is_deleted',0)->get();
        $allWjecSubject=DB::table('subjects')->where('exam_board','WJEC')->where('exam_type','GCSE')->where('is_ac',1)->where('is_deleted',0)->get();
        
        return view('frontend.pastpapers.subjectslist',compact('allEdexcelSubject','allAqaSubject','allOcrSubject','allWjecSubject'));
    }
    // pastpaper details
    public function pastPaperDetails($category,$subcategory,$resubcategory){
       

            
        $category_id=Category::where([
            ['is_deleted', 0],
            ['is_active', 1],
            ['slug', $category],
        ])->first();
        $subcategory_id=SubCategory::where([
            ['is_deleted', 0],
            ['is_active', 1],
            ['category_id', $category_id->id],
            ['slug', $subcategory],
        ])->first();
        $resubcategory_id=Resubcategory::where([
            ['is_deleted', 0],
            ['is_active', 1],
            ['category_id', $category_id->id],
            ['subcategory_id', $subcategory_id->id],
            ['slug', $resubcategory],
        ])->first();

        $allPastPaper = PastPaper::where('category', $category_id->id)
        ->where('subcategory', $subcategory_id->id)
        ->where('resubcategory', $resubcategory_id->id)
        ->with(['series' => function ($query) {
            $query->select(['id', 'name']); // Select necessary columns
        }])
        ->get()
        ->groupBy('series.name');// Group by a field from PastPaperYears
        
        // dd($allPastPaper);
         return view('frontend.pastpapers.pastpapersdetails',compact('category_id','subcategory_id','resubcategory_id','allPastPaper'));
    }
    // blogs manage
    public function blogs(){
        $allBlogs = Blogs::where(['is_deleted' => 0, 'is_active' => 1])->paginate(7);
        return view('frontend.blogs.index',compact('allBlogs'));
    }
    // blog Details
    public function blogsDetails($slug){
        $data = Blogs::where(['is_deleted' => 0, 'is_active' => 1,'slug'=>$slug])->first();
        $allRelatedPost= Blogs::where(['is_deleted' => 0, 'is_active' => 1,'category'=>$data->category])->get();
        return view('frontend.blogs.details',compact('data','allRelatedPost'));
    }

    public function SubjectDetails($type,$subjects){


        $category = Category::where('slug', $type)
        ->select(['id', 'category_name','slug'])
        ->first();

        // dd($category);
    
        if (!$category) {
            // Redirect or return a view with an error message
            return view('error-page', ['message' => 'Category not found']);
        }
        $subcategory = SubCategory::where('slug', $subjects)
        ->where('category_id',$category->id)
        ->select(['id', 'subcategory_name','slug'])
        ->with(['resubcategories' => function($query) {
            $query->select(['id', 'subcategory_id', 'resubcategory_name','past_papers','revision_notes','exam_questions','flashcards','slug'])->where('is_deleted',0)->where('is_active',1); // Adjust fields as needed
        }])
        ->first();
    
        if (!$subcategory) {
            // Redirect or return a view with an error message
            return view('error-page', ['message' => 'Subcategory not found']);
        }

       
        
        // If both are found, pass the data to the view
        return view('frontend.resourceDetails.index', compact('subcategory', 'category'));
    
    }

    public function subscribe(Request $request){
        return redirect()->back()->with([
            'message' => 'Subscrive Success',
            'alert-type' => 'success'
        ]);
    }

}
