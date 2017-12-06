@extends('layouts.app')


@section('content')
    <div class="container">
      <h1>Crear Cuenta de Usuario</h1>
      <p> Ingresa los datos </p>

      {!! Form::open(['url' => route('user-create')]) !!}
          <div class="form-group">
              {!! Form::label('name') !!}
              {!! Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Escriba su nombre']) !!}
          </div>
          <div class="form-group">
              {!! Form::label('email') !!}
              {!! Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Ingrese Correo']) !!}
          </div>
          <div class="form-group">
              {!! Form::label('password') !!}
              {!! Form::password('password', ['class' => 'form-control']) !!}
          </div>
          <div class="form-group">
              {!! Form::label('country_code', 'Country Code') !!}
              {!! Form::text('country_code', '', ['class' => 'form-control', 'id' => 'authy-countries']) !!}
          </div>
          <div class="form-group">
              {!! Form::label('phone_number', 'Phone number') !!}
              {!! Form::text('phone_number', '', ['class' => 'form-control', 'id' => 'authy-cellphone']) !!}
          </div>
          <div class="form-group">
              <button type="submit" class="btn btn-primary">Sign up</button>
          </div>
      {!! Form::close() !!}
    </div>
@endsection
