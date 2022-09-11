<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\ActualizarVentaRequest;
use App\Http\Resources\VentaResource;
use App\Models\Venta;
use Illuminate\Http\Request;

class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return VentaResource::collection(Venta::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*
        Venta::create($request->all());
            return response()->json([
                'res'=>true,
                'msg'=>'Venta Realizada'
        ]);  */
        return (new VentaResource(Venta::create($request->all())))->additional(['msg'=>'Venta Guardada Correctamente']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Venta $venta)
    {
    /*    return response()->json([
            'res'=> true,
            'venta'=>$venta
        ],200); */

        return new VentaResource($venta);


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ActualizarVentaRequest $request, Venta $venta)
    {
        $venta->update($request->all());
    /*    return response()->json([
            'res'=> true,
            'mensaje' => 'Venta Actualizado'
        ],200); */

        return (new VentaResource($venta))->additional(['msg'=>'Actualizacion exitosa']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Venta $venta)
    {
        $venta->delete();
    /*    return response()->json([
            'res'=> true,
            'mensaje' => 'Venta Eliminada'
        ],200);  */

        return (new VentaResource($venta))->additional(['msg'=>'Venta Eliminada']);
    }
}
