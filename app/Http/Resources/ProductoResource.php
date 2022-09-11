<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductoResource extends JsonResource
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
          
            'id'=> $this->id,
            'nombre'=> $this->nombre,
            'precio'=> $this->precio,
            'descripcion'=> $this->descripcion,
            'imagen'=> $this->imagen,
            'categoria_id'=> $this->categoria,
            'cantidad'=> $this->cantidad,

        ];
    }

    public function with($request)
    {
        return[
            'res'=> true,
        ];
    }
}
