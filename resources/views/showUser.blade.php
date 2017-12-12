@extends('layouts.app')



@section('content')
    <h1>{{ $user->name }}</h1>
    
    <p>Estado de Cuenta:
        @if($user->verified)
            Verified
        <h1>Complete sus datos  </h1>

        {!! Form::open(['url' => route('user-postverify'),'file'=>'true']) !!}

          <div class="form-group">
              {!! Form::label('ciudad') !!}
              {!! Form::text('ciudad', '', ['class' => 'form-control', 'placeholder' => 'Ingrese Ciudad']) !!}
          </div>

          <div class="form-group">
              {!! Form::label('calle') !!}
              {!! Form::text('calle', '', ['class' => 'form-control', 'placeholder' => 'Ingrese Calle']) !!}
          </div>

          <div class="form-group">
              {!! Form::label('postal') !!}
              {!! Form::number('postal', '', ['class' => 'form-control', 'placeholder' => 'Ingrese postal']) !!}
          </div>
          <div class="form-group">
            
              {!! Form::select('tipo', ['cliente' => 'Cliente', 'administrador' => 'Administrador', 'supervisor' => 'Supervisor'],'cliente') !!}
          </div> 

          <div class="form-group">
              {!! Form::label('foto') !!}
              {!! Form::file('foto') !!}
          </div> 

          <div class="form-group">
              <button type="submit" class="btn btn-primary">Crear Usuario</button>
          </div>

          {!! Form::close() !!}

        @else
            Not Verified
        @endif
    </p>
    @if( !$user->verified )
        <p>
          <a href="{{ route('user-verify') }}">Verifica tu cuenta ahora</a>
        </p>
    @endif
@endsection
