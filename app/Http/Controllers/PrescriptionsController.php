<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Prescription;
use App\Http\Resources\Prescription as PrescriptionResource;

class PrescriptionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prescriptions = Prescription::all();
        return PrescriptionResource::collection($prescriptions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Store new prescription
        $prescription = $request->isMethod('put') ? Prescription::findOrFail($request->prescription_id) : new Prescription ;
        
        // Update prescription (method ==  put)
        $prescription->id = $request->input('observation_id');
        $prescription->referral_id = $request->input('referral_id');
        $prescription->medicine = $request->input('medicine'); // or any other treatment
        $prescription->description = $request->input('description');
        
        if($prescription->save()){
            return new PrescriptionResource($prescription);
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
        // Get A Single prescription - treatment
        $prescription = Prescription::findOrFail($id);

        // Return single prescription as a resource
        return new PrescriptionResource($prescription);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Get prescription
        $prescription = Prescription::findOrFail($id);

        // Return deleted prescription
        if($prescription->delete()){
            return new PrescriptionResource($prescription);
        }
    }
}
