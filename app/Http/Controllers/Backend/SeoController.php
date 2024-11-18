<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Seo;
use App\Models\CompanyInformation;
use App\Models\Social;
use Carbon\Carbon;

class SeoController extends Controller
{
    
    public function __construct(){
        $this->middleware('auth:admin');
      }
    public function create(){
        $seo=Seo::first();
        return view('backend.seo.index',compact('seo'));
    }
    // update
    public function update(Request $request){
        $update=Seo::where('id',$request->id)->update([
            'meta_title'=>$request->meta_title,
            'meta_keyword'=>$request->meta_keyword,
            'meta_author'=>$request->meta_author,
            'meta_description'=>$request->meta_description,
            'google_verification'=>$request->google_verification,
            'bing_verification'=>$request->bing_verification,
            'google_analytics'=>$request->google_analytics,
            'alexa_analytics'=>$request->alexa_analytics,
            'facebook_pixel'=>$request->facebook_pixel,
            'updated_at'=>Carbon::now()->toDateTimeString(),

        ]);
        if($update){

            $notification = array(
              'messege' => 'Update Success!',
              'alert-type' =>'success'
            );
            return redirect()->back()->with($notification);
        }else{

            $notification = array(
              'messege' => 'Update Faild!',
              'alert-type' =>'error'
            );
            return redirect()->back()->with($notification);
        }
    }

    // company information
    public function companycreate(){
        $companyinformation=CompanyInformation::first();
        return view('backend.companyinformation.index',compact('companyinformation'));
    }
    public function companyupdate(Request $request){
        $update=CompanyInformation::where('id',$request->id)->update([
    		'company_name'=>$request->company_name,
            'company_motto'=>$request->company_motto,
    		'mobile'=>$request->mobile,
    		'email'=>$request->email,
    		'fax'=>$request->fax,
    		'address'=>$request->address,
    		'google_map'=>$request->google_map,
    	]);
    	if($update){
	    	$notification = array(
	          'messege' => 'CompanyInformation Update Success!',
	          'alert-type' =>'success'
	      	);
	      	return redirect()->back()->with($notification);
	    }else{
	    	$notification = array(
	          'messege' => 'CompanyInformation Update Faild!',
	          'alert-type' =>'error'
	      	);
	      	return redirect()->back()->with($notification);
	    }
    }

    // sorica
    public function socialcreate(){
        $social=Social::first();
        return view('backend.social.index',compact('social'));
    }
    // social update
    public function socialupdate(Request $request){
        $update=Social::where('id',$request->id)->update([
            'facebook'=>$request->facebook,
            'twitter'=>$request->twitter,
            'linkend'=>$request->linkend,
            'youtube'=>$request->youtube,
            'feed'=>$request->feed,
            'google_plus'=>$request->google_plus,
       ]);
        if($update){

            $notification = array(
              'messege' => 'Update Success!',
              'alert-type' =>'success'
            );
            return redirect()->back()->with($notification);
        }else{

            $notification = array(
              'messege' => 'Update Faild!',
              'alert-type' =>'error'
            );
            return redirect()->back()->with($notification);
        }
    }
}
