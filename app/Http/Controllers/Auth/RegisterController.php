<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    
    use RegistersUsers;


    protected function validator(Request $request)
    {
        return Validator::make($request, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:3', 'confirmed'],
        ]);
    }

  
    public function create(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:3', 'confirmed'],
        ]);
        return $request;
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
            Alert::toast('Please Check Your Email and verify Your Account', 'success');
            Mail::to($request->email)->send(new UserRegister($code));
            return redirect('/email/verify/' . $email . '/' . $insert);
           
        }else{
            Alert::toast('Faild', 'Message Send Faild');
            return redirect()->back();
        }
    }
}
