<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Str;
use Alert;

class SocialAuthController extends Controller
{
    // Redirect to Google
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    // Handle callback from Google
    public function handleGoogleCallback()
    {
        
        try {

            $user = Socialite::driver('google')->user();
           

            $finduser = User::where('email', $user->email)->first();

          

            if ($finduser) {
                 $update=User::where('id',$finduser->id)->update([
                    'is_verified'=>1,
                ]);
                 Auth::login($finduser);
                return redirect('/dashboard');
            } else {
               
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id' => $user->id,
                    'is_verified' =>'1',
                    'is_active' =>'1',
                    'created_at'=>Carbon::now()->toDateTimeString(),
                    'password' => encrypt('my-google')
                ]);

                Auth::login($newUser);
                return redirect('/dashboard');
            }
            
            
            
            
        } catch (Exception $e) {
            Alert::toast('Already Registerd email use manual login ', 'error');
           return redirect('/login');
        }
            
    }
}
