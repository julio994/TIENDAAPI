<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    use HasFactory;
    protected $fillable = [

        'customer_id',
        'producto_id',
        'cantidad',
        'subtotal',


    ];
    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function producto(){
        return $this->hasMany(Producto::class,'producto_id');
    }
    public function Customer(){
        return $this->hasOne(Customer::class,'customer_id');
    }
    public function venta(){
        return $this->hasOne(Venta::class);
    }
}
