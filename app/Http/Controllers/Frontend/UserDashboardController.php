<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;
use App\Models\User;
use Carbon\Carbon;

class UserDashboardController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    // User Dashboard
    public function dashboard(){
        return view('frontend.dashboard.home');
    }
    // User profile
    public function profile(){
        return view('frontend.dashboard.profile');
    }
    // profile update
    public function profileUpdate(Request $request)
    {
        // Validate the incoming data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . Auth::user()->id,
            'phone' => 'nullable|string|max:20',
            'bio' => 'nullable|string|max:500',
        ]);
    
        // Attempt to update the user data
        $update = User::where('id', Auth::user()->id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'bio' => $request->bio,
        ]);
    
        // Check if the update was successful
        if ($update) {
            $notification = [
                'messege' => 'Update successful',
                'alert-type' => 'success'
            ];
        } else {
            $notification = [
                'messege' => 'Update failed',
                'alert-type' => 'error'
            ];
        }
    
        return redirect()->back()->with($notification);
    }

    //password
    public function profilePasswordUpdate(Request $request){
           // Validate the request data
        $request->validate([
            'old_password' => 'required',
            'password' => 'required|string|min:3|confirmed',
        ]);

        // Check if the current password matches the user's actual password
        if (!Hash::check($request->old_password, Auth::user()->password)) {
            $notification = [
                'messege' => 'The current password is incorrect.',
                'alert-type' => 'error'
            ];
            return redirect()->back()->with($notification);
        }

        // Update the password
        $user = Auth::user();
        $user->password = Hash::make($request->password);
        $user->save();

        // Notification message
        $notification = [
            'messege' => 'Password updated successfully',
            'alert-type' => 'success'
        ];
        Auth::logout();
        return redirect('/login');
    }
    // Purchase History
    public function purchaseHistory(){
        return view('frontend.dashboard.purchase-history');
    }
    // wishlist
    public function wishList(){
        return view('frontend.dashboard.wishlist');
    }
    // EditProfile
    public function editProfile(){
        return view('frontend.dashboard.edit-profile');
    }
    // download history
    public function downloadHistory(){
        return view('frontend.dashboard.download-history');
    }
    // subscription Details
    public function subcriptionDetails(){
        return view('frontend.dashboard.subscription-details');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
