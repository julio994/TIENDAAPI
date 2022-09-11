<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'carrito_id',
        'total',
        'fecha',
    ];
    protected $hidden = [
        'created_at',
        'updated_at',
    ];
    public function Carrito(){
        return $this->hasOne(Carrito::class,'carrito_id');
    }

}
