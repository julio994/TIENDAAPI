<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'nombre',
        'apellido',
        'email',
        'password',


    ];
    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function carrito(){
        return $this->hasOne(Carrito::class);
    }

}
