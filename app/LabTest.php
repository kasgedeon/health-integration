<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LabTest extends Model
{
    // Relation to Referral
    public function referral(){
        return $this->belongsTo('App\Referral', 'referral_id')->withDefault([
            'id' => 0,
            'name' => 'Unknown Test',
            'result' => 'Unknown Result'
        ]);
    }
}
