<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use app\Tipo;
use app\prestamoLibro;
class Libro extends Model
{
    
    protected $table="Libros";
    protected $primaryKey='id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre',
        'editorial', 
        'año',
        'ubicacion',
        'autor', 
        'area_conocimiento',
        'diasP',
    ];

    public function tipo(){
        return $this->belongsTo('app\Tipo','id_tipo');
    }
    public function prestamo(){
        return $this->hasMany('app\prestamoLibro','id_libro','id');
    }
    

}
