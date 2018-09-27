<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Referral extends Model
{
    // Relation to Patient
    public function patient(){
        return $this->belongsTo('App\Patient', 'patient_id')->withDefault([
            'id' => 0,
            'first_name' => 'Unknown Patient',
            'other_names' => 'Unknown Patient',
            'ref_no' => 'Unknown Reference'
        ]);
    }

    /*
    * Get Physician who initiate Referral
    */
    public function fromPhysician(){
        return $this->belongsTo('App\Physician', 'from_physician_id')->withDefault([
            'id' => 0,
            'first_name' => 'Unknown Physician',
            'other_names' => 'Unknown',
            'ref_no' => 'Unknown',
            'hospital_id' => 'Unknown Hospital'
        ]);
    }

    /*
    * Get Observations related to Transfer
    */
    public function observations(){
        return $this->hasMany('App\Observation', 'referral_id');
    }

    /*
    * Get lab tests associated with Referral
    */
    public function labTests(){
        return $this->hasMany('App\LabTest', 'referral_id');
    }

    /*
    * Get prescriptions made before Referral
    */
    public function prescriptions(){
        return $this->hasMany('App\Prescription', 'referral_id');
    }

    /*
    * Relation with Hospital patient is referred to
    */
    public function toHospital(){
        return $this->belongsTo('App\Hospital', 'to_hospital_id')->withDefault([
            'id' => 0,
            'name' => 'Unknown Hospital',
            'ref_no' => 'Unknown',
            'type' => 'Unknown',
            'address' => 'Unknown Address',
            'website' => 'Unknown',
            'mobile' => 'Unknown'
        ]);
    }
}
