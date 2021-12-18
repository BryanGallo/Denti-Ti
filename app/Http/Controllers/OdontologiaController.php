<?php

namespace App\Http\Controllers;

use App\Models\Odontologia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OdontologiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('auth.odontologia.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.odontologia.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // dd($request->all());
        //validaciones
        $data=request()-> validate([
            'nombre'=>'required|min:6',
            'apellido'=>'required|min:6',
            'cedula'=>'required|min:6',
            'correo'=>'required|min:6',
            'direc'=>'required|min:6',
            'celular'=>'required|min:6',
        ]);

        DB::table('odontologias')-> insert([
            'nombre' =>$data['nombre'],
            'apellido' =>$data['apellido'],
            'cedula' =>$data['cedula'],
            'correo' =>$data['correo'],
            'direc' =>$data['direc'],
            'celular' =>$data['celular'],
        ]);
        //rediccionar
        return redirect()-> action([OdontologiaController::class, 'index']);
     }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Odontologia  $odontologia
     * @return \Illuminate\Http\Response
     */
    public function show(Odontologia $odontologia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Odontologia  $odontologia
     * @return \Illuminate\Http\Response
     */
    public function edit(Odontologia $odontologia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Odontologia  $odontologia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Odontologia $odontologia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Odontologia  $odontologia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Odontologia $odontologia)
    {
        //
    }
}
