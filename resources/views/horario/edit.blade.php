@extends('template.admin')
@section('content')
    <h3> Horario </h3>
    <div class="row">
        <div class="col-lg-6 col-md-6 col-xs-12">
            <h3> Editar Horario: {{$horario->id_horario}} </h3>
            @include('Mensajes.error')

            {{!!Form::model($horario,['method'=>'PATCH','route'=>['horario.update',$horario->id_horario]])!!}}
            {{Form::token()}}

            <div class="form-group">
                <label for="id_horario">ID Horario:</label>
                <input type="number" class="form-control" disable readonly value="{{$horario->id_horario}}"  name="id_horario">

            </div>
            
            <div class="form-group">
                <label for="fecha_horario">Fecha:</label>
                <input type="date" class="form-control" value="{{$horario->fecha_horario}}"  name="fecha_horario">

            </div>
           
            <div class="form-group">
                <label for="hora">Hora:</label>
                <input type="time" class="form-control" value="{{$horario->hora}}" name="hora">

            </div>
            
               <div class="form-group">
                    <label for="id_origen_destino">OrigenDestino:</label>
                    <select name="id_origen_destino" class="form-control">
                        @foreach($origenes as $origen)
                            @if($origen->id_origen_destino==$horario->id_origen_destino)
                        <option value="{{$origen->id_origen_destino}} "selected> {{$origen->origen.'-'. $origen->destino}}</option>
                            @else
                        <option value="{{$origen->id_origen_destino}} "> {{$origen->origen.'-'. $origen->destino}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
       
            
            <div class="form-group">
                <button class="btn btn-primary" type="submit">Enviar</button>
                <button class="btn btn-danger" type="reset">Cancelar</button>
                
            </div>

            <div class="form-group">
                <h3>{{$horario->reserva}}</h3>
                
            </div>

            {!!Form::close()!!}
        </div>
    </div>
@endsection