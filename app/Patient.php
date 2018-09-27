<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    /*
    * Get details related to Patient
    */
    public function details(){
        return $this->hasOne('App\PatientDetail', 'patient_id');
    }

    /*
    * Get basic medical data related to Patient
    * E.g. Blood Type, Allergies, etc.
    */
    public function healthData(){
        return $this->hasOne('App\PatientHealthData', 'patient_id');
    }

    /*
    * Get referrals/transfers associated with Patient
    */
    public function referrals(){
        return $this->hasMany('App\Referral', 'patient_id');
    }


}
