<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use Mail;
use App\Mail\UserRegister;
use Auth;
class UserRegisterController extends Controller
{
    public function register(){
        return view('auth.register');
    }
    public function create(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:3', 'confirmed'],
        ]);
        // return $request;
        $insert=User::insertGetId([
            'name'=>$request->name,
            'email'=>$request->email,
            'is_verified'=>0,
            'password'=>Hash::make($request->password),
            'created_at'=>Carbon::now()->toDateTimeString(),
        ]);
       if($insert){
          $user= User::where('id',$insert)->first();
            $email = md5($request->email);
            $code = random_int(100000, 999999);
            User::where('id', $insert)->update([
                'code' => $code,
            ]);
            // Alert::toast('Please Check Your Email and verify Your Account', 'success');
            Mail::to($request->email)->send(new UserRegister($code));
            return redirect('/email/verify/' . $email . '/' . $insert);
           
        }else{
            Alert::toast('Faild', 'Message Send Faild');
            return redirect()->back();
        }
    }
    public function email_verify($email, $id)
    {
        return view('auth.verify', compact('id'));
    }
    public function verify_code(Request $request)
    {
        $validated = $request->validate([
            'first' => 'required',
            'second' => 'required',
            'third' => 'required',
            'forth' => 'required',
            'five' => 'required',
            'six' => 'required',
        ]);
         $first=$request->first;
         $second=$request->second;
         $third=$request->third;
         $forth=$request->forth;
         $five=$request->five;
         $six=$request->six;
        $maincode=$first.$second.$third.$forth.$five.$six;
       
        $user = User::where('id', $request->id)->where('code', $maincode)->first();
        if ($user) {
            $userVerified = User::where('id', $request->id)->update([
                'is_verified' => 1,
                'code' => NULL,
            ]);
            if ($userVerified) {
                Auth::login($user);
                // Alert::toast('Successfully Verified Account', 'success');
                return redirect('/dashboard');
            } else {
                // Alert::toast('Something Went Wrong', 'error');
                return redirect()->back();
            }
        } else {
            // Alert::toast('Seems like you have entered wrong code', 'error');
            return redirect()->back();
        }
    }
}
