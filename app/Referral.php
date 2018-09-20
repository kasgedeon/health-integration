<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Referral extends Model
{
    // Relation to Patient
    public function patient(){
        return $this->belongsTo('App\Patient', 'patient_id')->withDefault([
            'id' => 0,
            'name' => 'Unknown Hospital',
            'ref_no' => 'Unknown Reference',
            'type' => 'Unknown Hospital Type',
            'address' => 'Unkonwn Address',
            'website' => 'Unknwon Website',
            'mobile' => 'Unknown Mobile'
        ]);
    }
}
