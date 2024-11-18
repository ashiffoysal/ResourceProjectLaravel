<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Settings;
use Carbon\Carbon;
use DB;
use Auth;

class PolicyController extends Controller
{
    public function __construct(){
        $this->middleware('auth:admin');
    }
    // index
    public function index(){
        $edit=Settings::where('key','privacy_policy')->first();
        return view('backend.privacypolicy.index',compact('edit'));
    }
    // policy update
    public function update(Request $request){
        $update=Settings::where('id',$request->id)->update([
            'value'=>$request->privacy_policy,
            'last_updated_by'=>Auth::user()->id,
            'updated_at'=>Carbon::now()->toDateTimeString(),
        ]);
        if($update){
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
    // terms and condtion
    // index
    public function termsindex(){
        $edit=Settings::where('key','terms_condition')->first();
        return view('backend.termscondition.index',compact('edit'));
    }
    // policy update
    public function termsupdate(Request $request){
        $update=Settings::where('id',$request->id)->update([
            'value'=>$request->privacy_policy,
            'last_updated_by'=>Auth::user()->id,
            'updated_at'=>Carbon::now()->toDateTimeString(),
        ]);
        if($update){
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
