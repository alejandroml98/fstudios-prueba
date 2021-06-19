<?php

namespace App\Http\Controllers;

use App\Models\Cuenta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CuentaController extends Controller
{
    public function __construct()
    {        
        $this->middleware('admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cuentas= Cuenta::all();
        return view('cuentas', ['cuentas'=>$cuentas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cuenta-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->naturaleza);
        $cuenta= new Cuenta();
        $cuenta->nombre_cuenta=$request->nombre;
        if($request->naturaleza=="Se carga"){
            $cuenta->naturaleza=true;
        }else {
            $cuenta->naturaleza=false;
        }
        $cuenta->saldo=0;
        $cuenta->save();
        return redirect(route('cuentas')); 
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cuenta  $cuenta
     * @return \Illuminate\Http\Response
     */
    public function show(Cuenta $cuenta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cuenta  $cuenta
     * @return \Illuminate\Http\Response
     */
    public function edit(Cuenta $cuenta)
    {           
        return view('cuenta-edit', ['cuenta'=>$cuenta]);
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cuenta  $cuenta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cuenta $cuenta)
    {
        $cuenta->nombre_cuenta=$request->nombre;
        if($request->naturaleza=="Se carga"){
            $cuenta->naturaleza=true;
        }else {
            $cuenta->naturaleza=false;
        }
        $cuenta->save();
        return redirect(route('cuentas'));         
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cuenta  $cuenta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cuenta $cuenta)
    {
        $cuenta->delete();
        return redirect(route('cuentas'));         
    }
}
