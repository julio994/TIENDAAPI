<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'nombre',
        'precio',
        'descripcion',
        'imagen',
        'categoria_id',
        'cantidad',


    ];
    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function categoria(){
        return $this->belongsTo(Categoria::class,'categoria_id');
    }

    public function carrito(){
        return $this->belongsTo(Carrito::class,'id');
    }
   
}
