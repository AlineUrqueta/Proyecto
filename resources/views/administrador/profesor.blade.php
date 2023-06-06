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
                        <a class="nav-link" aria-current="page" href="#">Listado de propuestas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Ver profesores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Ver alumnos</a>
                    </li>
                </ul>
            </div>
            

            <div class="row m-2 mt-2">
                <div class="col-12">
                    <h5 class = "mt-2 mb-4">Profesores</h5>

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>RUT</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>8765345-5</td>
                                <td>King</td>
                                <td>Dedede</td>
                            </tr>
                            <tr>
                                <td>12345890-6</td>
                                <td>Dr</td>
                                <td>Eggman</td>
                            </tr>
                            <tr>
                                <td>14654876-6</td>
                                <td>Edelgard</td>
                                <td>Hresvelg</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</body>
@endsection

</html>