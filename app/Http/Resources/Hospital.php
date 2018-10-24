<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Physician as PhysicianResource;

class Hospital extends JsonResource
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

        // Custom formatting
        
        return [
            'id' => $this->id,
            'name' => $this->name,
            'reference_no' => $this->ref_no,
            'type' => $this->type,
            'address' => $this->address,
            'website' => $this->website,
            'mobile' => $this->mobile,
            'physicians' => PhysicianResource::collection($this->physicians)
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
