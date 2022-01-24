<?php

namespace App\Http\Controllers;

use App\Models\Odontologia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OdontologiaController extends Controller
{
    //constructor
    public function __construct()//definiendo constructor
    {
        $this->middleware('auth');//verifica la autentificaci[on]
    }
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
        //consulta categorias
        $categorias=DB::table('categorias')->get()->pluck('categoria','id');
        return view('auth.odontologia.create')->with('categorias',$categorias);
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
        // dd($request->all());
        //dd($request['imagen']->store('upload-pacientes','public'));//base de datos de imagenes propias de laravel
        //validaciones
        $data=request()-> validate([
            'nombre'=>'required|min:4',
            'apellido'=>'required|min:4',
            'cedula'=>'required|min:6',
            'correo'=>'required|min:6',
            'direc'=>'required|min:6',
            'celular'=>'required|min:6',
            'categoria'=>'required',
            'info'=>'required',
            // 'imagen'=>'required|imagen',
        ]);
        $ruta_imagen=($request['imagen']->store('upload-pacientes','public'));

        DB::table('odontologias')-> insert([
            'nombre' =>$data['nombre'],
            'apellido' =>$data['apellido'],
            'cedula' =>$data['cedula'],
            'correo' =>$data['correo'],
            'direc' =>$data['direc'],
            'celular' =>$data['celular'],
            'info' =>$data['categoria'],
            'imagen' =>$ruta_imagen,
            // 'imagen' =>$data['imagen'],
            // 'user_id' =>$data['user_id'],
            'user_id' =>Auth::user()->id,
            'categoria_id' =>$data['categoria'],
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
