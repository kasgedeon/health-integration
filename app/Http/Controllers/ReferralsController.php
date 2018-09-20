<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use App\Referral;
use App\Http\Resources\referral as ReferralResource;

class ReferralsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get referrals/transfers -- paginate
        $referrals = Referral::paginate(20);
        /*
        $referrals = Patient::all();
        $referrals = Patient::orderBy('created_at', 'desc')->get();
        */

        // Return collection of referrals as a resource
        return ReferralResource::collection($referrals);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Store new referra/transfer
        $referral = $request->isMethod('put') ? Referral::findOrFail($request->referral_id) : new Referral;
        
        // Update referral (method ==  put)
        $referral->id = $request->input('referral_id');
        $referral->patient_id = $request->input('patient_id');
        $referral->from_physician_id = $request->input('from_physician_id');
        $referral->to_hospital_id = $request->input('to_hospital_id');
        $referral->status = $request->input('status');
        
        if($referral->save()){
            return new ReferralResource($referral);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Get A Single referral/patient transfer
        $referral = Referral::findOrFail($id);

        // Return single article as a resource
        return new ReferralResource($referral);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // New & Update made in the store function above
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Get referral
        $referral = Referral::findOrFail($id);

        // Return deleted referral
        if($referral->delete()){
            return new ReferralResource($referral);
        }
    }
}
