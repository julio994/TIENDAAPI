<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class VentaResource extends JsonResource
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
          
            'id'=>$this->id,
            'carrito_id'=>$this->carrito_id,
            'total'=>$this->total,
            'fecha'=>$this->fecha,

        ];
    }

    public function with($request)
    {
        return[
            'res'=> true,
        ];
    }
}
