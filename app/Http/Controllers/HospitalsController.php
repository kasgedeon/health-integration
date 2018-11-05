<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use App\Hospital;
use App\Http\Resources\Hospital as HospitalResource;

class HospitalsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get hospitals -- paginate
        $hospitals = Hospital::paginate(20);

        // Return collection of hospitals as a resource
        return HospitalResource::collection($hospitals);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Store new hospital
        $hospital = $request->isMethod('put') ? Hospital::findOrFail($request->hospital_id) : new Hospital ;
        
        // Update hospital (method ==  put)
        $hospital->id = $request->input('hospital_id');
        $hospital->name = $request->input('name');
        $hospital->ref_no = $request->input('reference_no');
        $hospital->type = $request->input('type');
        $hospital->address = $request->input('address');
        $hospital->website = $request->input('website');
        $hospital->mobile = $request->input('mobile');
        
        if($hospital->save()){
            return new HospitalResource($hospital);
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
        // Get A Single hospital
        $hospital = Hospital::where('ref_no', $id)->firstOrFail();
        //$hospital = Hospital::findOrFail($id);        

        // Return single article as a resource
        return new HospitalResource($hospital);
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
        // Get hospital
        $hospital = Hospital::findOrFail($id);

        // Return deleted hospital
        if($hospital->delete()){
            return new HospitalResource($hospital);
        }
    }
}
