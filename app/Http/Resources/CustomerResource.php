<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CustomerResource extends JsonResource
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
            'apellido'=> $this->apellido,
            'email'=> $this->email,
            'password'=> $this->password,

        ];
    }

    public function with($request)
    {
        return[
            'res'=> true,
        ];
    }
}
