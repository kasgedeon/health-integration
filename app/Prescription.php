<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
    // Relation to Referral
    public function referral(){
        return $this->belongsTo('App\Referral', 'referral_id')->withDefault([
            'id' => 0,
            'medicine' => 'None',
            'description' => 'None'
        ]);
    }
}
