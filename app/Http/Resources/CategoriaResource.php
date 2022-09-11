<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CategoriaResource extends JsonResource
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
            'numero_categoria'=> $this->id,
            'nombre'=> $this->nombre,
            'descripcion'=> $this->descripcion,
        ];
    }
    public function with($request)
    {
        return[
            'res'=> true,
        ];
    }
}
