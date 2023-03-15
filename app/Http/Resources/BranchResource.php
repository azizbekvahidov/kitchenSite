<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BranchResource extends JsonResource
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
            'id' => $this['id'],
            'name_uz' => $this['name_uz'],
            'name_ru' => $this['name_ru'],
            'name_en' => $this['name_en'],
            'address_uz' => $this['address_uz'],
            'address_ru' => $this['address_ru'],
            'address_en' => $this['address_en'],
            'phone' => $this['phone'],
        ];
    }
}
