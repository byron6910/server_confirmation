<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Origen_Destino;

class Horarios extends Model
{
    protected $table='horarios';
    protected $primaryKey='id_horario';
    protected $fillable=['fecha_horario','hora','id_origen_destino'];
    protected $hidden=['created_at','updated_at'];
    


    public function origen_destino(){
        return  $this->belongsTo('App\Origen_Destino','id_origen_destino');
    }

    public function reserva(){
        
                return $this->hasManyThrough('App\Reserva','App\Viaje','id_horario','id_viaje','id_horario','id_viaje');
            }
  
}
