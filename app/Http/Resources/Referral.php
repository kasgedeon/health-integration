<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Observation as ObservationResource;
use App\Http\Resources\LabTest as LabTestResource;
use App\Http\Resources\Prescription as PrescriptionResource;

class Referral extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);

        /*
        * Custom formatting
        */
        return [
            /**
             * referral details
             */
            'referral_id' => $this->id,
            'referral_status' => $this->status,
            'referral_date' => $this->created_at,            
            
            /**
             * patient details
             */
            'patient_ref_no' => $this->patient->ref_no,
            'patient_fname' => $this->patient->first_name,
            'patient_lname' => $this->patient->other_names,
            'patient_sex' => $this->patient->details->sex,
            'patient_dob' => $this->patient->details->dob,
            'patient_address' => $this->patient->details->address,
            'patient_mobile' => $this->patient->details->mobile,
            'patient_occupation' => $this->patient->details->occupation,
            'patient_blood_group' => $this->patient->healthData->blood_type,
            'patient_food_allergies' => $this->patient->healthData->food_allergies,
            'patient_drug_allergies' => $this->patient->healthData->drug_allergies,
            'patient_genetic_conditions' => $this->patient->healthData->genetic_conditions,
            'patient_created_at' => $this->patient->created_at,
            
            /**
             * referring & referrer hospitals
             */
            'referral_from_hospital_id' => $this->fromPhysician->hospital_id,
            'referral_from_hospital_name' => $this->fromPhysician->hospital->name,
            'referral_from_doctor_title' => $this->fromPhysician->details->title,
            'referral_from_doctor_name' => $this->fromPhysician->other_names,
            'referral_from_doctor_specialty' => $this->fromPhysician->details->specialty,
            'referral_from_doctor_mobile' => $this->fromPhysician->details->mobile,
            'referral_to_hospital_id' => $this->toHospital->id,
            'referral_to_hospital_name' => $this->toHospital->name,
            'referral_to_hospital_type' => $this->toHospital->type,
            'referral_to_hospital_address' => $this->toHospital->address,

            /**
             * referral medical information (observations, lab tests, prescriptions)
             */
            'referral_initial_consultations' => ObservationResource::collection($this->observations),
            'referral_initial_labTests' => LabTestResource::collection($this->labTests),
            'referral_initial_prescriptions' => PrescriptionResource::collection($this->prescriptions)
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
