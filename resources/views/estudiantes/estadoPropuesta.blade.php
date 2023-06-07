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
        <div class="col-lg-6 col-m-6">
            <h5 class="mt-2 mb-4">Estado de Propuesta</h5>
            <div class="card">
                <div class="card-header text-center">
                   Detalle de la Propuesta
                </div>
                <div class="card-body">

                    <div class="row">

                            
                            <div class="col-12 d-flex flex-column">
                                <fieldset disabled>
                                    <div class="m-2">
                                        <label for="fecha" class="fw-bold mb-2">Fecha </label>
                                        <input type="date" name="fecha" id="fecha" class="form-control" value = {{$propuesta->fecha}}>
                                    </div>
                                    
                                     
                                    <div class="m-2">
                                        @if($propuesta->estado == 3)
                                            <label for="estado" class="fw-bold mb-2">Estado</label>
                                            <input type="text" class="form-control" placeholder="Esperando Revision">

                                            <div class="col mt-2">
                                                <div class="alert alert-info">
                                                    Su propuesta esta siendo revisada!
                                                </div>
                                            </div>
                                        @elseif ($propuesta->estado == 1)
                                            <label for="estado" class="fw-bold mb-2">Estado</label>
                                            <input type="text" class="form-control" placeholder="Aceptado">

                                            <div class="col mt-2">
                                                <div class="alert alert-success">
                                                    Propuesta aceptada! Ha finalizado el proceso.
                                                </div>
                                            </div>

                                        @elseif ($propuesta->estado == 2)
                                            <label for="estado" class="fw-bold mb-2">Estado</label>
                                            <input type="text" class="form-control" placeholder="Rechazado">
                                            <div class="col mt-2">
                                                <div class="alert alert-danger">
                                                    Propuesta rechazada, debe ingresar una nueva propuesta!
                                                </div>
                                            </div>

                                        @elseif ($propuesta->estado == 4)
                                            <label for="estado" class="fw-bold mb-2">Estado</label>
                                            <input type="text" class="form-control" placeholder="Modificar Propuesta">

                                            <div class="">
                                                <label for="documento" class="fw-bold mb-2">Documento</label>
                                                <input type="file" id="documento" name = "documento" class="form-control">
                                            </div>
                                            
                                            <div class="col mt-2">
                                                <div class="alert alert-warning">
                                                    Debe modificar su propuesta, revise la retroalimentacion del profesor e ingrese una nueva!
                                                </div>
                                            </div>
                                        @endif
                                        
                                    </div>
                                 

                                <fieldset>
                            </div>
                    



                </div>

            </div>
        </div>

        

    </div>

<div>



@endsection