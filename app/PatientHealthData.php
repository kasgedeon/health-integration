<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PatientHealthData extends Model
{
    // Relation to Patient
    public function patient(){
        return $this->belongsTo('App\Patient', 'patient_id')->withDefault([
            'id' => 0,
            'blood_type' => 'Unknown Blood Group',
            'food_allergies' => 'None',
            'drug_allergies' => 'None',
            'genetic_conditions' => 'None'
        ]);
    }
}
