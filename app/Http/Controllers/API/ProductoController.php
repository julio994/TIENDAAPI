<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\ActualizarProductoRequest;
use App\Http\Requests\GuardarProductoRrequest;
use App\Http\Resources\ProductoResource;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ProductoResource::collection(Producto::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GuardarProductoRrequest $request)
    {
        /*
        Producto::create($request->all());
            return response()->json([
                'res'=>true,
                'msg'=>'Producto Guardada Correctamente'
        ]);  */
        return (new ProductoResource(Producto::create($request->all())))->additional(['msg'=>'Producto Guardado Correctamente']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
    /*    return response()->json([
            'res'=> true,
            'producto'=>$producto
        ],200);  */

        return new ProductoResource($producto);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ActualizarProductoRequest $request, Producto $producto)
    {
        $producto->update($request->all());
    /*    return response()->json([
            'res'=> true,
            'mensaje' => 'Producto Actualizado'
        ],200); */

        return (new ProductoResource($producto))->additional(['msg'=>'Actualizacion exitosa']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        $producto->delete();
    /*    return response()->json([
            'res'=> true,
            'mensaje' => 'Producto Eliminado'
        ],200);  */

        return (new ProductoResource($producto))->additional(['msg'=>'Producto Eliminado']);
    }
}
