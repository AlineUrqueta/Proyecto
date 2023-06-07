@extends('layouts.masterFinal')
@section('contenido-principal')
<div class="mt-2">
    <ul class="nav nav-tabs">

        <li class="nav-item">
            <a class="nav-link @if(Route::current()->getName()=='estudiantes.index') active @endif" aria-current="page" href="{{ route('estudiantes.index', ['estudiante_rut' => $estudiante->rut]) }}">Datos Estudiante</a>
        </li>
        <li class="nav-item">
            <a class="nav-link @if(Route::current()->getName()=='estudiantes.propuesta') active @endif" aria-current="page" href="{{route('estudiantes.propuesta',['estudiante_rut' => $estudiante->rut])}}">Añadir Propuesta</a>
        </li>
        <li class="nav-item">
            <a class="nav-link @if(Route::current()->getName()=='estudiantes.estadoPropuesta') active @endif" aria-current="page" href="{{route('estudiantes.estadoPropuesta')}}">Estado Propuesta</a>
        </li>
        <li class="nav-item">
            <a class="nav-link @if(Route::current()->getName()=='estudiantes.retroalimentacion') active @endif" aria-current="page" href="{{route('estudiantes.retroalimentacion')}}">Retroalimentacion</a>
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
                                {{-- <fieldset disabled>
                                    <div class="m-2">
                                        <label for="estado" class="fw-bold mb-2">Estado</label>
                                        <input type="text" class="form-control" placeholder="Esperando Revision">
                                    </div>
                                <fieldset> --}}


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

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>rut</th>
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
                        <td>@if($propuesta->estado = 1)
                            En revision
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>

<div>


@endsection
