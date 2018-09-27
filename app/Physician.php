<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Physician extends Model
{
    /*
    * Get more details of Physician
    */
    public function details(){
        return $this->hasOne('App\PhysicianDetail', 'physician_id');
    }

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

    /*
    * Get Referrals initiated by Physician
    */
    public function referrals(){
        return $this->hasMany('App\Referral', 'from_physician_id');
    }
}
