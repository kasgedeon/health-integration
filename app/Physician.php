<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Physician extends Model
{
    // Relation to Hospitals
    public function hospital(){
        return $this->belongsTo('App\Hospital', 'hospital_id')->withDefault([
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
