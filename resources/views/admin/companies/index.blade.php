@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Lista de Compañias</h1>
@stop

@section('content')


    @if(session('info'))
        <div class="alert alert-danger">
            <strong>{{session('info')}}</strong>
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <div class="car-header">
                <a class="btn btn-secondary" href="{{route('admin.companies.create')}}">Crear Compañia</a>
            </div>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Informacion de Contacto</th>
                        <th>Creado el dia</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($companies as $company)
                        <tr>
                            <td>{{$company->id}}</td>
                            <td>{{$company->name}}</td>
                            <td>{{$company->email}}</td>
                            <td>{{$company->contact_data}}</td>
                            <td>{{$company->created_at}}</td>
                            <td width="10px">
                                <a class="btn btn-primary btn-sm" href="{{route('admin.companies.edit', $company)}}">Editar</a>
                            </td>
                            <td width="10px">
                                <form action="{{route('admin.companies.destroy', $company)}}" method="POST">
                                    @csrf
                                    @method('delete')

                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
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