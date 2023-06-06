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
                        <a href="{{route('home.inicio')}}" class="text-dark">Cerrar Sesión</a>
                    </div>

                </div>
            </nav>
        </div>

        
        <div class="container-fluid bg-body-tertiary  border border-5 rounded" style = "height:30rem;">
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
                <div class="col-12">
                    <h5 class = "mt-2 mb-4">Propuestas</h5>

                    @if(count($propuestas)==0)
                    <div class="col">
                        <div class="alert alert-info">
                            No hay propuestas en la base de datos.
                        </div>
                    </div>
                    @endif

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>RUT Alumno</th>
                                <th>Fecha</th>
                                <th>Documento</th>
                                <th>Estado</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($propuestas as $propuesta)
                            <tr>
                                <td>{{$propuesta->estudiante_rut}}</td>
                                <td>{{$propuesta->fecha}}</td>
                                <td>{{$propuesta->documento}}</td>
                                <td>
                                    <select class="form-select" name="estado" id="estado">
                                        <option value="aceptado" @if($propuesta->estado=="aceptado") selected="selected"@endif>Aceptado</option>
                                        <option value="rechazado" @if($propuesta->estado=="rechazado") selected="selected"@endif>Rechazado</option>
                                        <option value="esperando" @if($propuesta->estado=="esperando") selected="selected"@endif>Esperando revisión</option>
                                        <option value="modificar" @if($propuesta->estado=="modificar") selected="selected"@endif>Modificar propuesta</option>
                                    </select>
                                </td>
                            </tr>
                            @endforeach
                            <!--
                            <tr>
                                <td>Tutankamon</td>
                                <td>02-06-2023</td>
                                <td>archivo.pdf</td>
                                <td>
                                    <select class="form-select" name="estado" id="estado">
                                        <option value="1">Aceptado</option>
                                        <option value="2">Rechazado</option>
                                        <option value="3">Esperando revisión</option>
                                        <option value="4">Modificar propuesta</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>El Épico</td>
                                <td>02-06-2023</td>
                                <td>archivo.pdf</td>
                                <td>
                                    <select class="form-select" name="estado" id="estado">
                                        <option value="1">Aceptado</option>
                                        <option value="2">Rechazado</option>
                                        <option value="3">Esperando revisión</option>
                                        <option value="4">Modificar propuesta</option>
                                    </select>
                                </td>
                            </tr>
                            -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</body>
@endsection

</html>