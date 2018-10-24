<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    /*
    * Get details related to Patient
    */
    public function details(){
        return $this->hasOne('App\PatientDetail', 'patient_id')->withDefault([
            'id' => 0,
            'sex' => 'Undefined Sex',
            'dob' => 'Unknown Date Of Birth',
            'address' => 'Unknown Address',
            'county' => 'Unknown County',
            'mobile' => 'Unknown Mobile Phone',
            'email' => 'Unknown Email Address',
            'occupation' => 'Unknown Occupation'
        ]);
    }

    /*
    * Get basic medical data related to Patient
    * E.g. Blood Type, Allergies, etc.
    */
    public function healthData(){
        return $this->hasOne('App\PatientHealthData', 'patient_id')->withDefault([
            'id' => 0,
            'blood_type' => 'Unknown Blood Group',
            'food_allergies' => 'None',
            'drug_allergies' => 'None',
            'genetic_conditions' => 'None'
        ]);
    }

    /*
    * Get referrals/transfers associated with Patient
    */
    public function referrals(){
        return $this->hasMany('App\Referral', 'patient_id');
    }


}
