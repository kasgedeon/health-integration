<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/*
PATIENTS CONTROLLER
*/

Route::get('patients', 'PatientsController@index'); // List patients
Route::get('patient/{id}', 'PatientsController@show'); // Get single patient
Route::post('patient', 'PatientsController@store'); // Create new patient
Route::put('patient', 'PatientsController@store'); // Update patient
Route::delete('patient/{id}', 'PatientsController@destroy'); // Delete patient

/*
PHYSICIANS CONTROLLER
*/

Route::get('physicians', 'PhysiciansController@index'); // List physicians
Route::get('physician/{id}', 'PhysiciansController@show'); // Get single physician
Route::post('physician', 'PhysiciansController@store'); // Create new physician
Route::put('physician', 'PhysiciansController@store'); // Update physician
Route::delete('physician/{id}', 'PhysiciansController@destroy'); // Delete physician

/*
HOSPITALS CONTROLLER
*/

Route::get('hospitals', 'HospitalsController@index'); // List hospitals
Route::get('hospital/{id}', 'HospitalsController@show'); // Get single hospital
Route::post('hospital', 'HospitalsController@store'); // Create new hospital
Route::put('hospital', 'PatienHospitalsControllertsController@store'); // Update hospital
Route::delete('hospital/{id}', 'HospitalsController@destroy'); // Delete hospital

/*
REFERRALS CONTROLLER
*/

Route::get('referrals', 'ReferralsController@index'); // List referrals
Route::get('referral/{id}', 'ReferralsController@show'); // Get single referral
Route::post('referral', 'ReferralsController@store'); // Create new referral
Route::put('referral', 'ReferralsController@store'); // Update referral
Route::delete('referral/{id}', 'ReferralsController@destroy'); // Delete referral

/*
OBSERVATIONS/CONSULTATIONS CONTROLLER
*/

Route::get('observations', 'ObservationsController@index'); // List observations
Route::get('observation/{id}', 'ObservationsController@show'); // Get single observation
Route::post('observation', 'ObservationsController@store'); // Create new observation
Route::put('observation', 'ObservationsController@store'); // Update observation
Route::delete('observation/{id}', 'ObservationsController@destroy'); // Delete observation

/*
LABS/TESTS CONTROLLER
*/

Route::get('labTests', 'LabTestsController@index'); // List Lab Tests
Route::get('labTest/{id}', 'LabTestsController@show'); // Get single Lab Test
Route::post('labTest', 'LabTestsController@store'); // Create new Lab Test
Route::put('labTest', 'LabTestsController@store'); // Update Lab Test
Route::delete('labTest/{id}', 'LabTestsController@destroy'); // Delete Lab Test

/*
PRESCRIPTIONS CONTROLLER
*/

Route::get('prescriptions', 'PrescriptionsController@index'); // List prescriptions
Route::get('prescription/{id}', 'PrescriptionsController@show'); // Get single prescription
Route::post('prescription', 'PrescriptionsController@store'); // Create new prescription
Route::put('prescription', 'PrescriptionsController@store'); // Update prescription
Route::delete('prescription/{id}', 'PrescriptionsController@destroy'); // Delete prescription