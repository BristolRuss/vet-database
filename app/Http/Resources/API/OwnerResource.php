<?php

namespace App\Http\Resources\API;

use Illuminate\Http\Resources\Json\JsonResource;

class OwnerResource extends JsonResource
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
            "id" => $this->id,
            "title" => $this->title,
            "name" => $this->name,
            "address_line_1" => $this->address_line_1,
            "address_line_2" => $this->address_line_2,
            "postcode" => $this->postcode,
            "city" => $this->city,
            "animals" => $this->animals
        ];
    }
}
