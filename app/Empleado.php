<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use app\prestamoLibro;
class Empleado extends Model
{
    
    protected $table="Empleados";
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
    ];

    public function prestamo(){
        return $this->hasMany('App\prestamoLibro','id_estudiante','id');
    }
 }
