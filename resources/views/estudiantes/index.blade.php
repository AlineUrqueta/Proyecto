@extends('layouts.masterFinal')
@section('contenido-principal')
<div class= "mt-2">
    <ul class="nav nav-tabs">
        
        <li class="nav-item">
            <a class="nav-link @if(Route::current()->getName()=='estudiantes.index') active @endif" aria-current="page" href="{{ route('estudiantes.index', ['estudiante_rut' => $estudiante->rut]) }}">Datos Estudiante</a>
        </li>
        <li class="nav-item">
            <a class="nav-link @if(Route::current()->getName()=='estudiantes.propuesta') active @endif" aria-current="page" href="{{route('estudiantes.propuesta',['estudiante_rut' => $estudiante->rut])}}">Añadir Propuesta</a>
        </li>
    </ul>
</div>
<div class="row m-2">           
    <div class="row m-2 mt-2">
        <div class="col-lg-4 col-m-12 ">
            <h5 class = "mt-2 mb-4">Datos del Estudiante</h5>
            <div class="card">
                <div class="card-header">
                    Información Personal
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-4 d-flex flex-column">
                            <label for="nombre" class="fw-bold">Nombre</label>
                            <label for="apellido" class="fw-bold">Apellido</label>
                            <label for="rut" class="fw-bold">RUT</label>
                            <label for="email" class="fw-bold">Email</label>
                        </div>
                        

                        <div class="col-8 d-flex flex-column">
                            <label for="nombre">{{ $estudiante->nombre }}</label>
                            <label for="apellido">{{ $estudiante->apellido }}</label>
                            <label for="rut">{{ $estudiante->rut }}</label>
                            <label for="email">{{ $estudiante->email }}</label>
                           
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="col-lg-8 col-m-12 mt-m-4 mt-s-4">
            <h5 class="mt-2 mb-4">Propuestas de {{$estudiante->nombre}}</h5>
              
            @if(count($propuestas)==0)
                <div class="col">
                    <div class="alert alert-info">
                        No hay propuestas en la base de datos.
                    </div>
                </div>
            @else
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Rut</th>
                            <th>Fecha</th>
                            <th>Documento</th>
                            <th>Descargar</th>
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
                                <button class="btn border-dark d-flex align-items-center">
                                Descargar  <span class="material-symbols-outlined ">download</span>
                                </button>
                            </td>
                            <td>
                                <a class = "text-decoration-none" href="{{ route('estudiantes.estadoPropuesta', ['estudiante_rut' => $estudiante->rut,'propuesta_id'=> $propuesta ->id]) }}">
                                    <button class="btn border-dark d-flex align-items-center">
                                        Estado <span class="material-symbols-outlined">task</span>
                                    </button>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
<div>
@endsection


