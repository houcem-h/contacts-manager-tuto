<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ContactResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'contact_id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'company' => $this->company,
            'birthday' => $this->birthday->format('d/m/Y'),
            'last_update' => $this->updated_at->diffForHumans()
        ];
    }
}
