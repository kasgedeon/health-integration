<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Observation;
use App\Http\Resources\Observation as ObservationResource;

class ObservationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $observations = Observation::all();
        return ObservationResource::collection($observations);
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
        // Store new Observation
        $observation = $request->isMethod('put') ? Observation::findOrFail($request->observation_id) : new Observation ;
        
        // Update Observation (method ==  put)
        $observation->id = $request->input('observation_id');
        $observation->referral_id = $request->input('referral_id');
        $observation->description = $request->input('description');
        $observation->actions = $request->input('actions');
        
        if($observation->save()){
            return new ObservationResource($observation);
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
        // Get A Single observation-consultation
        $observation = Observation::findOrFail($id);

        // Return single lab test as a resource
        return new ObservationResource($observation);
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
        // Get lab test
        $observation = Observation::findOrFail($id);

        // Return deleted test
        if($observation->delete()){
            return new ObservationResource($observation);
        }
    }
}
