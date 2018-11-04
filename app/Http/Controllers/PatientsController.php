<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use App\Patient;
use App\PatientDetail;
use App\Http\Resources\Patient as PatientResource;

class PatientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get patients -- paginate
        $patients = Patient::paginate(20);
        $patientDetails = PatientDetail::all();
        /*
        $patients = Patient::all();
        $patients = Patient::orderBy('created_at', 'desc')->get();
        */

        // Return collection of patients as a resource
        return PatientResource::collection($patients);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Store new patient
        $patient = $request->isMethod('put') ? Patient::findOrFail($request->patient_id) : new Patient ;
        
        // Update patient (method ==  put)
        $patient->id = $request->input('patient_id');
        $patient->first_name = $request->input('first_name');
        $patient->other_names = $request->input('other_names');
        $patient->ref_no = $request->input('reference_no');
        //$patient->details_id = $request->input('details_id');
        $patient->created_by = $request->input('created_by');
        
        if($patient->save()){
            return new PatientResource($patient);
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
        // Get A Single patient
        $patient = Patient::where('ref_no', $id)->firstOrFail();
        //$patient = Patient::findOrFail($id);

        // Return single article as a resource
        return new PatientResource($patient);
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
        // Get patient
        $patient = Patient::findOrFail($id);

        // Return deleted patient
        if($patient->delete()){
            return new PatientResource($patient);
        }
    }
}
