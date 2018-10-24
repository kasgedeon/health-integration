<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\LabTest;
use App\Http\Resources\LabTest as LabTestResource;

class LabTestsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $labTests = LabTest::all();
        return LabTestResource::collection($labTests);
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
        // Store new labTest
        $labTest = $request->isMethod('put') ? LabTest::findOrFail($request->labTest_id) : new LabTest ;
        
        // Update hospital (method ==  put)
        $labTest->id = $request->input('labTest_id');
        $labTest->referral_id = $request->input('referral_id');
        $labTest->name = $request->input('lab_name');
        $labTest->result = $request->input('lab_result');
        
        if($labTest->save()){
            return new LabTestResource($labTest);
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
        // Get A Single lab test
        $labTest = LabTest::findOrFail($id);

        // Return single lab test as a resource
        return new LabTestResource($labTest);
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
        $labTest = LabTest::findOrFail($id);

        // Return deleted test
        if($labTest->delete()){
            return new LabTestResource($labTest);
        }
    }
}
