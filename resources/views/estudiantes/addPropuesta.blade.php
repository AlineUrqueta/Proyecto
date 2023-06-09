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
        <div class="col-lg-4 col-m-6">
            <h5 class="mt-2 mb-4">Añadir Nueva Propuesta</h5>
            <div class="card">
                <div class="card-header text-center">
                    Registro de Propuesta
                </div>
                <div class="card-body">
                    {{-- {{route('propuesta.store')}} --}}
                    <form action="{{route('estudiantes.store',['estudiante_rut' => $estudiante->rut])}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- for, id y name deben tener el mismo nombre. -->

                        <div class="row">


                            <div class="col-12 d-flex flex-column">
                                <div class="m-2">
                                    <label for="fecha" class="fw-bold mb-2">Fecha </label>
                                    <input type="date" name="fecha" id="fecha" class="form-control">
                                </div>
                                <div class="m-2">
                                    <label for="documento" class="fw-bold mb-2">Documento</label>
                                    <input type="file" id="documento" name = "documento" class="form-control">
                                </div>
                                
                            </div>

                        </div>

                        <div class="row">
                            <div class="mt-4 mb-3 d-grid gap-2 d-block">
                                <button type="submit" class="btn btn-primary">Añadir Propuesta</button>
                            </div>
                        </div>

                    </form>



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
            <a class="text-decoration-none" href="{{ route('estudiantes.descargar', ['estudiante_rut' => $estudiante->rut, 'doc' => $propuesta->documento]) }}">
                <button class="btn border-dark d-flex align-items-center">
                    Descargar <span class="material-symbols-outlined ">download</span>
                </button>
            </a>
        </td>
        <td>
            <a class="text-decoration-none" href="{{ route('estudiantes.estadoPropuesta', ['estudiante_rut' => $estudiante->rut,'propuesta_id'=> $propuesta->id]) }}">
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
