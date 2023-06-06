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
<body background="images/fondo.jpg" style="background-size:auto; background-position:top; background-repeat: no-repeat;
  background-size: cover;">
    <div class="container bg-ternary">
        <div class="container-fluid bg-body-tertiary mt-4 mb-4 border border-5 rounded">
            <nav class="navbar navbar-expand-lg" id="navbarPrincipal">
                <div class="container-fluid">
                    
                    <div class="col-11">
                        Bienvenido <span class="fw-bold">Nombre Apellido del Administrador</span>
                    </div>
                    
                    <div class="col-1 text-end d-none d-lg-block">
                        <a href="/" class="text-dark">Cerrar Sesión</a>
                        
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
                        <a class="nav-link" href="#">Ver profesores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if(Route::current()->getName()=='administrador.estudiante') active @endif" href="{{route('administrador.estudiante')}}">Ver alumnos</a>
                    </li>
                </ul>
            </div>
            

            <div class="row m-2 mt-2">
                <div class="col-12">
                    <h5 class = "mt-2 mb-4">Propuestas</h5>

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Alumno</th>
                                <th>Fecha</th>
                                <th>Documento</th>
                                <th>Estado</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Kirby</td>
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
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</body>
@endsection

</html>