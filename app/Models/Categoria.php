<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'nombre',
        'descripcion',
    ];
    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function producto(){
        return $this->hasMany(Producto::class,'id');
    }
}
