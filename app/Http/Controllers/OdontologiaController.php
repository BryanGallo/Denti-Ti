<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Odontologia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Database\Seeders\CategoriasSeeder;

class OdontologiaController extends Controller
{
    //constructor
    public function __construct()//definiendo constructor
    {
        $this->middleware('auth');//verifica la autentificaci[on]
        // $this->middleware('auth',['except'=>'show']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userPacientes = Auth::user()->userPacientes;
        //
        return view('odontologias.index')->with('userPacientes',$userPacientes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //consulta categorias
        // $categorias=DB::table('categorias')->get()->pluck('categoria','id');
        //traer categoria con modelo
        $categorias=Categoria::all(['id','categoria']);
        return view('odontologias.create')->with('categorias',$categorias);
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

        //Redimensionar la imagen
        //$img=Image::make(public_path("storage/{$ruta_imagen}"))->fit(1000,50);
       //guaradr en el disco duro del servidor
        // $img->save();

        // DB::table('odontologias')-> insert([
        //     'nombre' =>$data['nombre'],
        //     'apellido' =>$data['apellido'],
        //     'cedula' =>$data['cedula'],
        //     'correo' =>$data['correo'],
        //     'direc' =>$data['direc'],
        //     'celular' =>$data['celular'],
        //     'info' =>$data['categoria'],
        //     'imagen' =>$ruta_imagen,
        //     // 'imagen' =>$data['imagen'],
        //     // 'user_id' =>$data['user_id'],
        //     'user_id' =>Auth::user()->id,
        //     'categoria_id' =>$data['categoria'],
        // ]);

        //Almacenar BBD
        Auth::user()->userPacientes()->create([
            'nombre' =>$data['nombre'],
            'apellido' =>$data['apellido'],
            'cedula' =>$data['cedula'],
            'correo' =>$data['correo'],
            'direc' =>$data['direc'],
            'celular' =>$data['celular'],
            'info' =>$data['info'],
            'imagen' =>$ruta_imagen,
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
        return view('odontologias.show')->with('odontologia',$odontologia);
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
        $categorias=Categoria::all(['id','categoria']);
        return view('odontologias.edit')->with('categorias',$categorias)
                                        ->with('odontologia',$odontologia);;
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
        //para que primero pase por el policy
        $this->authorize('update',$odontologia);


        $data=request()-> validate([
            'nombre'=>'required|min:4',
            'apellido'=>'required|min:4',
            'cedula'=>'required|min:6',
            'correo'=>'required|min:6',
            'direc'=>'required|min:6',
            'celular'=>'required|min:6',
            'categoria'=>'required',
            'info'=>'required',
        ]);

        //asignando valores
        $odontologia->nombre=$data['nombre'];
        $odontologia->apellido=$data['apellido'];
        $odontologia->cedula=$data['cedula'];
        $odontologia->correo=$data['correo'];
        $odontologia->direc=$data['direc'];
        $odontologia->celular=$data['celular'];
        $odontologia->categoria_id=$data['categoria'];
        $odontologia->info=$data['info'];


        //nueva imagen
        if (request('imagen')) {
            $ruta_imagen=($request['imagen']->store('upload-pacientes','public'));
            $odontologia->imagen=$ruta_imagen;

        }
        $odontologia->save();
        return redirect()-> action([OdontologiaController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Odontologia  $odontologia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Odontologia $odontologia)
    {
        //verificar el policy
        $this->authorize('delete',$odontologia);
        $odontologia->delete();
        return redirect()-> action([OdontologiaController::class, 'index']);
    }
}
