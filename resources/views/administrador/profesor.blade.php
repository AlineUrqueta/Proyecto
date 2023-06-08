<!DOCTYPE html>
<html lang="en">

@extends('layouts.estilos')

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>

@section('estilo-aqui')
<body>
    <div class="container bg-ternary">
        <div class="container-fluid bg-body-tertiary mt-4 mb-4 border border-5 rounded">
            <nav class="navbar navbar-expand-lg" id="navbarPrincipal">
                <div class="container-fluid">
                    
                    <div class="col-11">
                        Bienvenido <span class="fw-bold">Administrador</span>
                    </div>
                    
                    <div class="col-1 text-end d-none d-lg-block">
                        <a href="/" class="text-dark">Cerrar Sesión</a>
                        
                    </div>

                </div>
            </nav>
        </div>

        <div class="container-fluid bg-body-tertiary  border border-5 rounded" style = "height:auto;">
            <div class="row m-2 ">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link @if(Route::current()->getName()=='administrador.admin') active @endif" aria-current="page" href="{{route('administrador.admin')}}">Listado de propuestas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if(Route::current()->getName()=='administrador.profesor') active @endif" href="{{route('administrador.profesor')}}">Ver profesores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if(Route::current()->getName()=='administrador.estudiante') active @endif" href="{{route('administrador.estudiante')}}">Ver Estudiantes</a>
                    </li>
                </ul>
            </div>
            

            <div class="row m-2 mt-2">
                
                <div class="col-lg-4 col-m-6">
                    <h5 class = "mt-2 mb-4">Añadir Profesor</h5>
                    <div class="card">
                        <div class="card-header text-center">
                            Registro de Profesor
                        </div>
                        <div class="card-body">
                            <form action = "{{route('administrador.storeProfesor',$profesor->rut)}}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-12 d-flex flex-column">
                                        <div class="m-2">
                                            <label for="rut" class="fw-bold mb-2">RUT</label>
                                            <input type="text" name = "rut" id= "rut" class ="form-control" value="{{$profesor->rut}}">
                                        </div>
                                        <div class="m-2">
                                            <label for="nombre" class="fw-bold mb-2">Nombre</label>
                                            <input type="text" name = "nombre" id= "nombre" class ="form-control" value="{{$profesor->nombre}}">
                                        </div>
                                        <div class="m-2">
                                            <label for="apellido" class="fw-bold mb-2">Apellido</label>
                                        <input type="text" name = "apellido" id= "apellido" class ="form-control" value="{{$profesor->apellido}}">
                                    </div>
                                    
                                    </div>
        
                                </div>
        
                                <div class="row">
                                    <div class="mt-4 mb-3 d-grid gap-2 d-block">
                                        <button type = "submit" class="btn btn-primary">Añadir Profesor</button>
                                    </div>
                                </div>
                            </form>                        
                        </div>
                        
                    </div>
                    
                </div>

                <div class="col-lg-8 col-m-12 mt-m-4 mt-s-4">
                    <h5 class = "mt-2 mb-4">Lista de Profesores</h5>
                    @if(count($profesores)==0)
                    <div class="col">
                        <div class="alert alert-info">
                            No hay profesores agregados a la base de datos.
                        </div>
                    </div>
                    @endif

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Rut</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($profesores as $profesor)
                            <tr>
                                <td>{{$profesor->rut}}</td>
                                <td>{{$profesor->nombre}}</td>
                                <td>{{$profesor->apellido}}</td>
                                
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
            
            </div>
        </div>
</body>
@endsection

</html>