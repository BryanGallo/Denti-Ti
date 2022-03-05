<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Odontologia extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'apellido',
        'cedula',
        'correo',
        'direc',
        'celular',
        'info',
        'imagen',
        'categoria_id'

    ];

    public function categoriaOdontologia()
    {
        return $this->belongsTo(Categoria::class, 'categoria_id');
    }
    public function doctorPaciente()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
