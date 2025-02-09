<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Referral as ReferralResource;
// use App\Http\Resources\PatientDetail as PatientDetailResource;

class Patient extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);

        // Custom formatting
        return [
            'id' => $this->id,
            'first_name' => $this->first_name,
            'other_names' => $this->other_names,
            'reference_no' => $this->ref_no,
            'patient_details' => $this->details,
            'patient_healthData' => $this->healthData,
            /*
            'sex' => $this->details->sex,
            'dob' => $this->details->dob,
            'address' => $this->details->address,
            'mobile' => $this->details->mobile,
            'occupation' => $this->details->occupation,
            'blood_group' => $this->healthData->blood_type,
            'food_allergies' => $this->healthData->food_allergies,
            'drug_allergies' => $this->healthData->drug_allergies,
            'genetic_conditions' => $this->healthData->genetic_conditions,
            */
            'referrals' => ReferralResource::collection($this->referrals),
            'created_by' => $this->created_by,
            'created_at' => $this->created_at
        ];
    }

    public function with($request)
    {
        return [
            'version' => '1.0.0',
            'author' => 'Gedeon kas',
            'author_url' => 'gedkas.me'
        ];
    }
}
