@extends('template.admin')
@section('content')
    <h3> Create </h3>
    <div class="row">
        <div class="col-lg-6 col-md-6 col-xs-12">
            <h3> Nuevo Horario </h3>
            @include('Mensajes.error')
         </div>
    </div>

            {{!!Form::open(['url'=>'horario','method'=>'POST','autocomplete'=>'off'])!!}}
            {{Form::token()}}
    <div class="row">
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="id_horario">ID Horario:</label>
                <input type="number" class="form-control" placeholder="Escriba ID" name="id_horario" required value="{{old('id_horario')}}">

            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="fecha">Fecha:</label>
                <input type="date" class="form-control" placeholder="Escriba Fecha" name="fecha_horario"  required value="{{old('fecha_horario')}}">

            </div>
        </div>

        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="hora">Hora:</label>
                <input type="time" class="form-control" placeholder="Escriba Hora" name="hora" required value="{{old('hora')}}")}}>

            </div>


        </div>

       

        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
               <div class="form-group">
                    <label for="origen">Origen-Destino:</label>
                    <select name="id_origen_destino" class="form-control">
                        @foreach($origenes as $origen)
                        <option value="{{$origen->id_origen_destino}} "> {{$origen->origen.'-'. $origen->destino}}</option>

                        @endforeach
                    </select>
                </div>
        </div>

        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
             <div class="form-group">
                <button class="btn btn-primary" type="submit">Enviar</button>
                <button class="btn btn-danger" type="reset">Cancelar</button>
                
            </div>

        </div>

    </div>
            
            

            {!!Form::close()!!}
       
@endsection