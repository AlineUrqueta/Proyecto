@extends('layouts.masterAdmin')
@section('contenido-principal')

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

<div class="row m-2 mb-s-4 mb-m-4">           

    <div class="col-lg-4 col-m-6">
        <h5 class = "mt-2 mb-4">Añadir Estudiante</h5>
        <div class="card">
            <div class="card-header text-center">
                Registro de Estudiante
            </div>
            <div class="card-body">
                {{-- {{route('propuesta.store')}} --}}
                <form action = "{{route('administrador.storeEstudiante',$estudiante->rut)}}" method="POST" >
                    @csrf

                    <!-- for, id y name deben tener el mismo nombre. -->

                    <div class="row">

                        
                        <div class="col-12 d-flex flex-column">
                            <div class="m-2">
                                <label for="rut" class="fw-bold mb-2">Rut </label>
                                <input type="text "name = "rut" id= "rut" class ="form-control" value = "{{$estudiante->rut}}">
                            </div>
                            <div class="m-2">
                                <label for="nombre" class="fw-bold mb-2">Nombre </label>
                                <input type="text "name = "nombre" id= "nombre" class ="form-control" value = "{{$estudiante->nombre}}">
                            </div>
                            
                            <div class="m-2">
                                <label for="apellido" class="fw-bold mb-2">Apellido</label>
                                <input type="text "name = "apellido" id= "apellido" class ="form-control" value = "{{$estudiante->apellido}}">
                            </div>
                            <div class="m-2">
                                <label for="email" class="fw-bold mb-2">Email </label>
                                <input type="mail "name = "email" id= "email" class ="form-control" value = "{{$estudiante->email}}">
                            </div>
                            
                            
                            
                        </div>

                    </div>

                    <div class="row">
                        <div class="mt-4 mb-3 d-grid gap-2 d-block">
                            <button type = "submit" class="btn btn-primary">Añadir Estudiante</button>
                        </div>
                    </div>
                    
                </form>


                
            </div>
            
        </div>
    </div>
    
    <div class="col-lg-8 col-m-12 mt-m-4 mt-s-4 ">
        <h5 class = "mt-2 mb-4">Lista de Estudiante</h5>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Rut</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($estudiantes as $estudiante)
                <tr>
                    <td>{{$estudiante->rut}}</td>
                    <td>{{$estudiante->nombre}}</td>
                    <td>{{$estudiante->apellido}}</td>
                    <td>{{$estudiante->email}}</td>
                    
                </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>
        

        
<div>


@endsection