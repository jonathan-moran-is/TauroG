@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Compañias</h1>
@stop

@section('content')

    @if(session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif

    <div class="card">
        <div class="card-body">

            {!! Form::model($Company, ['route' => ['admin.companies.update', $Company], 'method' => 'put']) !!}

            <div class="form-group">
                    {!! Form::label('name', 'Nombre') !!}
                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('email', 'Correo Electronico') !!}
                    {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el email']) !!}
                    
                    @error('name')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    {!! Form::label('contact_data', 'Informacion de Contacto') !!}
                    {!! Form::text('contact_data', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la Informacion de Contacto']) !!}
                </div>

                {!! Form::submit('Actualizar Usuario', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}

        </div>
    </div>
    @stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script>
        Swal.fire(
        'Bienvenido Administrador!',
        'Prueba de SweetAlert2!',
        'success'
        )
    </script>
@stop