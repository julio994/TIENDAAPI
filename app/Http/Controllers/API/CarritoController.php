<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\ActualizarCarritoRequest;
use App\Http\Requests\GuardarCarritoRrequest;
use App\Http\Resources\CarritoResource;
use App\Models\Carrito;
use Illuminate\Http\Request;

class CarritoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return CarritoResource::collection(Carrito::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GuardarCarritoRrequest $request)
    {
        /*    return response()->json([
                'res'=>true,
                'msg'=>'Carrito Guardado Correctamente'
        ],200);
        */
        return (new CarritoResource(Carrito::create($request->all())))->additional(['msg'=>'Carrito Guardado Correctamente']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Carrito $carrito)
    {
    /*    return response()->json([
            'res'=> true,
            'carrito'=>$carrito
        ],200); */

        return new CarritoResource($carrito);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ActualizarCarritoRequest $request, Carrito $carrito)
    {
        $carrito->update($request->all());
    /*    return response()->json([
            'res'=> true,
            'mensaje' => 'Carrito Actualizado'
        ],200);  */
         return (new CarritoResource($carrito))->additional(['msg'=>'Actualizacion exitosa']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Carrito $carrito)
    {
        $carrito->delete();
    /*    return response()->json([
            'res'=> true,
            'mensaje' => 'Carrito Eliminado'
        ],200);  */
        return (new CarritoResource($carrito))->additional(['msg'=>'Carrito Eliminado']);
    }
}
