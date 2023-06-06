@extends('layouts.masterFinal')
@section('contenido-principal')

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

<div class="row m-2">           
    <div class="row m-2 mt-2">
        <div class="col-lg-6 col-m-6">
            <h5 class = "mt-2 mb-4">Añadir Estudiante</h5>
            <div class="card">
                <div class="card-header text-center">
                    Registro de Propuesta
                </div>
                <div class="card-body">
                    {{-- {{route('propuesta.store')}} --}}
                    <form action = "{{route('administrador.store')}}" method="POST" >
                        @csrf

                        <!-- for, id y name deben tener el mismo nombre. -->

                        <div class="row">

                            
                            <div class="col-12 d-flex flex-column">
                                <div class="m-2">
                                    <label for="fecha" class="fw-bold mb-2">Fecha </label>
                                    <input type="date"name = "fecha" id= "fecha" class ="form-control">
                                </div>
                                <div class="m-2">
                                     <label for="documento" class="fw-bold mb-2">Documento</label>
                                    <input type="file" class ="form-control">
                                </div>
                                
                               
                            </div>

                        </div>

                        <div class="row">
                            <div class="mt-4 mb-3 d-grid gap-2 d-block">
                                <button type = "submit" class="btn btn-primary">Añadir Propuesta</button>
                            </div>
                        </div>
                        
                    </form>


                    
                </div>
                
            </div>
        </div>
        
        <div class="col-lg-6 col-m-12 mt-m-4 mt-s-4">
            <h5 class = "mt-2 mb-4">Lista de estudiants</h5>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Fecha</th>
                        <th>Documento</th>
                        <th>Estado</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>02-06-2023</td>
                        <td>archivo.pdf</td>
                        <td>Aceptado</td>
                    </tr>
                    <tr>
                        <td>02-06-2023</td>
                        <td>archivo.pdf</td>
                        <td>Aceptado</td>
                    </tr>
                    <tr>
                        <td>02-06-2023</td>
                        <td>archivo.pdf</td>
                        <td>Aceptado</td>
                    </tr>
                </tbody>
            </table>
        </div>
        
    </div>
        
<div>


@endsection