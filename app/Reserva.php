<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Reserva extends Model
{
    protected $table='reserva';
    protected $primaryKey='id_reserva';
    protected $fillable=['fecha_reserva','estado','ci','id_viaje','cantidad','asiento','id'];
    protected $hidden=['created_at','updated_at'];
    

    public function cliente(){
        return  $this->belongsTo('App\Cliente','ci');
    }

    public function user(){
        return  $this->belongsTo('App\User','id');
    }

    public function viaje(){
        return  $this->belongs('App\Viaje','id_viaje');
    }

    public function cooperativa(){

        return $this->hasManyThrough('App\Cooperativa','App\Viaje','id_cooperativa','id_viaje','id_cooperativa','id_viaje');
    }

    public function horario(){
        
                return $this->hasManyThrough('App\Horario','App\Viaje','id_horario','id_viaje','id_horario','id_viaje');
            }


}
