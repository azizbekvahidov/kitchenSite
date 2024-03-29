<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class HomePageResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'settings' => HomePageSettingResource::make($this['homePageSettings']),
            'home_page' => HomeMediaResource::collection($this['home_page']),
            'other_images' => HomeMediaResource::collection($this['images'])
        ];
    }
}
