<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Observation extends Model
{
    // Relation to Referral
    public function referral(){
        return $this->belongsTo('App\Referral', 'referral_id')->withDefault([
            'id' => 0,
            'description' => 'None',
            'actions' => 'None'
        ]);
    }
}
