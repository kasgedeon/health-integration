<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhysicianDetail extends Model
{
    /*
    * Relation to Physician
    */
    public function physician(){
        return $this->belongsTo('App\Physician', 'physician_id');

        /*
        return $this->belongsTo('App\Physician', 'physician_id')->withDefault([
            'id' => 0,
            'title' => 'Undefined',
            'address' => 'Unknown',
            'mobile' => 'Unknown',
            'email' => 'Unknown',
            'specialty' => 'Undefined'
        ]);
        */
    }
}
