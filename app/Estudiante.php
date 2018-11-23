<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use app\prestamoLibro;
class Estudiante extends Model
{
    
    protected $table="Estudiantes";
    protected $primaryKey='id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre',
        'apellido', 
        'cedula',
        'carrera',
    ];

    public function prestamo(){
        return $this->hasMany('App\prestamoLibro','id_estudiante','id');
    }
 }
