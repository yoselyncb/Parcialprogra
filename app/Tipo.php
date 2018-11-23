<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use app\Libro;
class Tipo extends Model
{
    
    protected $table="Tipo";
    protected $primaryKey='id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'descripcion',
    ];

    public function libro(){
        return $this->hasMany('app\Libro','id_tipo','id');
    }
 }
