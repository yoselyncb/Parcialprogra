<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use app\Libro;
use app\Estudiante;
use app\Empleado;
class prestamoLibro extends Model
{
    
    protected $table="prestamo";
    protected $primaryKey='id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fecha_prestamo',
        'fecha_entrega',
    ];
    
    public function empleado(){
        return $this->belongsTo('app\Empleado','id_empleado');
    }
    public function estudiante(){
        return $this->belongsTo('app\Estudiante','id_estudiante');
    }
    public function libro(){
        return $this->belongsTo('app\Libro','id_libro');
    }

}
