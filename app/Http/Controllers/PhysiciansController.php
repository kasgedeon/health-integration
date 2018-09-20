<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use App\Physician;
use App\Http\Resources\Physician as PhysicianResource;

class PhysiciansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get physicians -- paginate
        $physicians = Physician::paginate(20);
        /*
        $physicians = Patient::all();
        $physicians = Patient::orderBy('created_at', 'desc')->get();
        */

        // Return collection of physicians as a resource
        return PhysicianResource::collection($physicians);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Store new physician
        $physician = $request->isMethod('put') ? Physician::findOrFail($request->physician_id) : new Physician;
        
        // Update physician (method ==  put)
        $physician->id = $request->input('physician_id');
        $physician->first_name = $request->input('first_name');
        $physician->other_names = $request->input('other_names');
        $physician->ref_no = $request->input('reference_no');
        $physician->hospital_id = $request->input('hospital_id');
        
        if($physician->save()){
            return new PhysicianResource($physician);
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
        // Get A Single physician
        $physician = Physician::findOrFail($id);
        //$hospital = App\Hospital::find(1);

        // Return single article as a resource
        return new PhysicianResource($physician);
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
        // Get physician
        $physician = Physician::findOrFail($id);

        // Return deleted physician
        if($physician->delete()){
            return new PhysicianResource($physician);
        }
    }
}
