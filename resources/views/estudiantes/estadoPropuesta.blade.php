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
        <h5 class="mt-2 mb-4">Estado de Propuesta</h5>
        <div class="col-lg-12 col-m-6 d-flex">
            <div class="col-lg-4 col-s-12 me-lg-5">
                <div class="card">
                <div class="card-header text-center">
                   Detalle de la Propuesta
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 ">
    
                            <div class="m-2">
                                <fieldset disabled>
                                    @if($propuesta->estado == 3)

                                        <label for="estado" class="fw-bold mb-2">Estado</label>
                                        <input type="text" class="form-control" placeholder="Esperando Revision">

                                        <div class="mt-2">
                                            <label for="fecha" class="fw-bold mb-2">Fecha Envio </label>
                                            <input type="date" name="fecha" id="fecha" class="form-control" value = {{$propuesta->fecha}}>
                                        </div>

                                        <div class="col mt-2">
                                            <div class="alert alert-info">
                                                Su propuesta esta siendo revisada!
                                            </div>
                                        </div>
                                    @elseif ($propuesta->estado == 1 or $propuesta->estado ==  2)

                                        <div class="mb-2">
                                            <label for="fecha" class="fw-bold mb-2">Fecha Envio </label>
                                            <input type="date" name="fecha" id="fecha" class="form-control" value = {{$propuesta->fecha}}>
                                        </div>

                                        <div class="mb-2">
                                            <label for="documento" class="fw-bold mb-2">Documento</label>
                                            <input type="text" id="documento" name = "documento" class="form-control" value ={{$propuesta->documento}}>
                                        </div>
                                                                                
                                        
                                        @if($propuesta->estado == 1)
                                            <label for="estado" class="fw-bold mb-2">Estado</label>
                                            <input type="text" class="form-control" placeholder="Aceptado">
                                            <div class="col mt-2">
                                                <div class="alert alert-success">
                                                    Propuesta aceptada! Ha finalizado el proceso.
                                                </div>
                                            </div>
                                        @elseif($propuesta->estado ==  2)
                                            <label for="estado" class="fw-bold mb-2">Estado</label>
                                            <input type="text" class="form-control" placeholder="Rechazado">

                                            <div class="col mt-2">
                                                <div class="alert alert-danger">
                                                    Propuesta rechazada, debe ingresar una nueva propuesta!
                                                </div>
                                            </div>
                                        @endif
                                    @endif
                                <fieldset>
                                

                                    @if ($propuesta->estado == 4)
                                        
                                        <div class="col-12 mt-2">
                                            <div class="alert alert-warning">
                                                Su propuesta debe ser modificada, revise la retroalimentacion del profesor!
                                            </div>
                                        </div>
                                        <div class=" col-12 d-grid gap-2 text-center">
                                            <a class = "text-decoration-none" href="{{ route('estudiantes.retroalimentacion', ['estudiante_rut' => $estudiante->rut,'propuesta_id'=> $propuesta ->id]) }}">
                                                <button class="btn btn-lg border-dark align-items-center ">
                                                    Retroalimentacion <span class="material-symbols-outlined">chat</span>
                                                </button>
                                            </a>
                                        </div>
                                        
                                        
                                        

                                        <label for="estado" class="fw-bold mb-2">Estado</label>
                                        <input type="text" class="form-control" placeholder="Modificar Propuesta">

                                        <div class="mb-2">
                                            <label for="fecha" class="fw-bold mb-2">Fecha Envio </label>
                                            <input type="date" name="fecha" id="fecha" class="form-control" value = {{$propuesta->fecha}}>
                                        </div>

                                        <div class="mb-2">
                                            <label for="documento" class="fw-bold mb-2">Documento</label>
                                            <input type="text" id="documento" name = "documento" class="form-control" value ={{$propuesta->documento}}>
                                        </div>
                                        
                                        
                                    @endif
                                    
                                </div>
                                
                            </div>
                        
                                 

                                
                        </div>
                    



                    </div>

                </div>
            </div>
            <div class="col-lg-4 col-s-12">
                            @if ($propuesta->estado == 4)
                            <div class="card">
                                <div class="card-header">
                                    Formulario
                                </div>
                                <div class="card-body">
                                    <form action="{{route('estudiantes.update',['estudiante_rut' => $estudiante->rut,'propuesta_id'=>$propuesta->id])}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('put')
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
                            @endif
                        
                        </div>
            
            
        </div>
        

        

    </div>

<div>



@endsection