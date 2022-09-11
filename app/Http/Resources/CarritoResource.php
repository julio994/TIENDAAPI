<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CarritoResource extends JsonResource
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
            'customer_id'=> $this->customer_id,
            'producto_id'=> $this->producto_id,
            'cantidad'=> $this->cantidad,
            'subtotal'=> $this->subtotal,

        ];
    }

    public function with($request)
    {
        return[
            'res'=> true,
        ];
    }
}
