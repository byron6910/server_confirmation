<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cooperativa extends Model
{
    protected $table='cooperativa';
    protected $primaryKey='id_cooperativa';
    protected $fillable=['nombre','direccion','telefono','correo','estado'];
    protected $hidden=['created_at','updated_at'];
    
    
    public function buses(){
        return $this->hasMany('App\Bus','id_bus');
    }
    public function viajes(){
        return $this->hasMany('App\Viaje','id_viaje');
    }

    
    public function reserva(){
        
                return $this->hasManyThrough('App\Reserva','App\Viaje','id_cooperativa','id_viaje','id_cooperativa','id_viaje');
            }
        
    public function conductor(){
                
        return $this->hasManyThrough('App\Conductor','App\Bus','id_cooperativa','id_bus','id_cooperativa','id_bus');
        }
}
