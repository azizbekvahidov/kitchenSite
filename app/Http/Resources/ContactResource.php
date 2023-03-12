<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ContactResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'site_name_uz' => $this->site_name_uz,
            'site_name_ru' => $this->site_name_ru,
            'site_name_en' => $this->site_name_en,
            'address_uz' => $this->address_uz,
            'address_ru' => $this->address_ru,
            'address_en' => $this->address_en,
            'phone' => $this->phone,
            'email' => $this->email,
            'map_link' => $this->map_link,
            'facebook' => $this->facebook,
            'instagram' => $this->instagram,
            'telegram' => $this->telegram,
        ];
    }
}
