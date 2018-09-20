<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    // Relation with Patient
    public function referrals(){
        return $this->hasMany('App\Referral', 'patient_id');
    }
}
