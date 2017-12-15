@extends('template.admin')
@section('content')
    <h3> Create </h3>
    <div class="row">
        <div class="col-lg-6 col-md-6 col-xs-12">
            <h3> Nuevo Cliente </h3>
           
            @include('Mensajes.error')
            {{!!Form::open(['url'=>'cliente','method'=>'POST','autocomplete'=>'off','file'=>'true'])!!}}
            {{Form::token()}}

            <div class="form-group">
                <label for="ci">CI:</label>
                <input type="text" class="form-control" value="{{old('ci')}}" placeholder="Escriba CI" name="ci">

            </div>
            
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control"value="{{old('nombre')}}"  placeholder="Escriba Nombre" name="nombre">

            </div>

            <div class="form-group">
                <label for="apellido">Apellido:</label>
                <input type="text" class="form-control" value="{{old('apellido')}}" placeholder="Escriba Apellido" name="apellido">

            </div>

            <div class="form-group">
                <label for="telefono">Telefono:</label>
                <input type="number" class="form-control" value="{{old('telefono')}}" placeholder="Escriba Telefono" name="telefono">

            </div>

            <div class="form-group">
                <label for="ciudad">Ciudad:</label>
                <input type="text" class="form-control" value="{{old('ciudad')}}" placeholder="Escriba Ciudad" name="ciudad">

            </div>
           

            <div class="form-group">
                <label for="calle">Calle:</label>
                <input type="text" class="form-control" value="{{old('calle')}}" placeholder="Escriba Calle" name="calle">
                
            </div>

            <div class="form-group">
                <label for="postal">Postal:</label>
                <input type="number" class="form-control" value="{{old('postal')}}" placeholder="Escriba Postal" name="postal">

            </div>


            <div class="form-group">
                <label for="correo">Correo:</label>
                <input type="email" class="form-control" value="{{old('correo')}}" placeholder="Escriba Correo" name="correo">
                
            </div>

            <div class="form-group">
                <label for="usuario">Usuario:</label>
                <input type="text" class="form-control" value="{{old('usuario')}}" placeholder="Escriba Usuario" name="usuario">
                
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control"  value="{{old('password')}}" placeholder="Escriba Password" name="password">
                
            </div>
            
            <div class="form-group">
                <label for="foto">Foto:</label>
                <input type="file" class="form-control"  name="foto">
                
            </div>
            
            <div class="form-group">
                <button class="btn btn-primary" type="submit">Enviar</button>
                <button class="btn btn-danger" type="reset">Cancelar</button>
                
            </div>

            {!!Form::close()!!}
        </div>
    </div>
@endsection