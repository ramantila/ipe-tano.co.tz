<?php

namespace App\Http\Controllers;

use App\Mail\ClaimTransfer;
use App\Mail\DocumentVerification;
use App\Models\Business;
use Illuminate\Http\Request;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Support\Facades\Mail;
use Session;

class ClaimController extends Controller
{
    public function index(){

        $businesses = Business::where('claim',1)->get();

        return view('admin.claim.index',compact('businesses'));

    }

    public function show($claim_id){

        $business = Business::find($claim_id);

        $role = Sentinel::findRoleByName('Business');
        
        $users = $role->users()->with('roles')->get();

        return view('admin.claim.show', compact('business','users'));

    }

    public function transfer(Request $request, $claim_id){

        return $claim = Business::with('user')->find($claim_id);
        $claim->user_id = $request->user_id;
        $claim->status = 1;
        $claim->transfer = 1;
        if($claim->save())
        {
            Mail::to($claim->user->email)->send(new ClaimTransfer($claim));
        }

        return redirect('businesses-claims/view');

    }

    public function verify($business_id){
        $business = Business::with('user')->find($business_id);
        $business->status = 1;
        $business->verify = 1;
        if($business->save())
        {
            Mail::to($business->user->email)->send(new DocumentVerification($business));
        }
        Session::flash('success', 'Account verified successfull!');

        return redirect('businesses-claims/view');
    }


}
