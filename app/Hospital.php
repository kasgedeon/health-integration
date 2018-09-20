<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    // Relation with Physicians
    public function physicians(){
        return $this->hasMany('App\Physician', 'hospital_id');
    }
}
