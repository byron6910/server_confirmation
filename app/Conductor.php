<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conductor extends Model
{
    protected $table='conductor';
    protected $primaryKey='id_conductor';
    protected $fillable=['nombre','apellido','telefono','direccion','correo','foto','id_bus'];
    protected $hidden=['created_at','updated_at'];
    

    public function bus (){
        return $this->belongsTo('App\Bus','id_bus');
    }

    public function cooperativa(){
        
                return $this->hasManyThrough('App\Cooperativa','App\Bus','id_cooperativa','id_bus','id_cooperativa','id_bus');
            }
}
