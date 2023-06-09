<!DOCTYPE html>
<html lang="en">

@extends('layouts.estilos')

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
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

        
        <div class="container-fluid bg-body-tertiary  border border-5 rounded mb-2" style = "height:auto;">
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
                                <th colspan= 2>Estado</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($propuestas as $propuesta)
                            <tr>
                                <td>{{$propuesta->estudiante_rut}}</td>
                                <td>{{$propuesta->fecha}}</td>
                                <td>{{$propuesta->documento}}</td>
                                
                                <form action="{{route('administrador.estado',['propuesta_id'=> $propuesta->id])}}" method="post">
                                    @csrf
                                    <td>
                                    <select class="form-select" name="estado" id="estado">
                                        <option value=1 @if($propuesta->estado==1) selected="selected"@endif>Aceptado</option>
                                        <option value=2 @if($propuesta->estado==2) selected="selected"@endif>Rechazado</option>
                                        <option value=3 @if($propuesta->estado==3) selected="selected"@endif>Esperando revisión</option>
                                        <option value=4 @if($propuesta->estado==4) selected="selected"@endif>Modificar propuesta</option>
                                    </select>
                                    </td>
                                    <td>
                                        
                                        <button class="btn border-dark d-flex align-items-center" type = "submit" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                            Cambiar estado <span class="material-symbols-outlined">task</span>
                                        </button>

                                    </td>
                                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Administrador - Estado de Propuesta</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Estado actualizado!
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                </form>
                                    
                                    
                                
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
            integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE"
            crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
                crossorigin="anonymous"></script>
            <script>
                const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
                const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
            </script>
</body>
@endsection

</html>