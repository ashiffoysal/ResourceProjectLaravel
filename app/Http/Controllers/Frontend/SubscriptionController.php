<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MeritSubscription;

class SubscriptionController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    // checkout page
    public function checkout(){
       
        $planId = request()->query('plan');
        $subscription = MeritSubscription::where([
            ['id', $planId],
            ['is_active', 1],
            ['is_deleted', 0]
        ])->first();
        return view('frontend.checkout.index',compact('subscription'));
    }

    public function purchase(Request $request){

         $stripePriceId = 'price_1QKKPxIi1Z8eD8I6TOmmbe10';
         return $request->user()->newSubscription('default', $stripePriceId)->checkout([
             'success_url' => route('plan.success'),
             'cancel_url' => route('plan.cancel'),
         ]);

    }
    // 
    public function success(){
        return "success";
    }
    public function cancel(){
        return "cancel";
    }
}
