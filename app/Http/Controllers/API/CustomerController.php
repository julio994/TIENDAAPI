<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\ActualizarCustomerRequest;
use App\Http\Requests\GuardarCustomerRrequest;
use App\Http\Resources\CustomerResource;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return CustomerResource::collection(Customer::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GuardarCustomerRrequest $request)
    {
        /*
        Customer::create($request->all());
            return response()->json([
                'res'=>true,
                'msg'=>'Customer Guardada Correctamente'
        ]);  */
        return (new CustomerResource(Customer::create($request->all())))->additional(['msg'=>'Customer Guardado Correctamente']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
     /*   return response()->json([
            'res'=> true,
            'customer'=>$customer
        ],200);  */

        return new CustomerResource($customer);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ActualizarCustomerRequest $request, Customer $customer)
    {
        $customer->update($request->all());
    /*    return response()->json([
            'res'=> true,
            'mensaje' => 'Usuario Actualizado'
        ],200); */

        return (new CustomerResource($customer))->additional(['msg'=>'Actualizacion exitosa']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        $customer->delete();
    /*    return response()->json([
            'res'=> true,
            'mensaje' => 'Usuario Eliminado'
        ],200);  */

        return (new CustomerResource($customer))->additional(['msg'=>'Usuario Eliminado']);
        
    }
}
