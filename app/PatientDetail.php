<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PatientDetail extends Model
{
    // Relation to Patient
    public function patient(){
        return $this->belongsTo('App\Patient', 'patient_id')->withDefault([
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
}
