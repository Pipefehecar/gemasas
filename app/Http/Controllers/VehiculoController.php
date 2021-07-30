<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehiculo;
use App\Models\Estado;


class VehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehiculos = Vehiculo::all();
       return view('vehiculo.index')->with('vehiculos',$vehiculos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estados = Estado::all();
        return view('vehiculo.create' , compact('estados'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vehiculos = new Vehiculo();
        $vehiculos->placa = $request->get('placa');
        $vehiculos->telefono = $request->get('telefono');
        $vehiculos->color = $request->get('color');
        if ($request->get('estado')=='ACTIVO' or $request->get('estado')=='activo') {
            $vehiculos->estado_id = 1;
        }else {
            $vehiculos->estado_id = 2;
        }
        
        

        $vehiculos->save();

        return redirect('/vehiculos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vehiculo = Vehiculo::find($id);
        $estados = Estado::all();
        return view('vehiculo.edit',compact('vehiculo','estados'));
        // return view('vehiculo.edit')->with('vehiculo',$vehiculo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $vehiculo = Vehiculo::find($id);
        $vehiculo->placa = $request->get('placa');
        $vehiculo->telefono = $request->get('telefono');
        $vehiculo->color = $request->get('color');
        if ($request->get('estado')=='ACTIVO' or $request->get('estado') =='activo') {
            $vehiculo->estado_id = 1;
        }if($request->get('estado')=='INACTIVO' or $request->get('estado') =='inactivo'){
            $vehiculo->estado_id = 2;
        }
        
        

        $vehiculo->save();
        return redirect('/vehiculos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vehiculo $vehiculo)
    {
        $vehiculo->delete();

       return redirect()->route('vehiculos.index')
                       ->with('success','vehiculo eliminado');
    }
    
}
