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
            <h5 class = "mt-2 mb-4">Retroalimentacion Propuesta</h5>
            
            <div class="card">
                <div class="card-header text-center">
                    Detalle Retroalimentacion
                </div>
                <div class="card-body">
                    <fieldset disabled>
                        <h6>Estudiante</h6>
                        <div class="row">
                            <div class="col-4">
                                <label for="nomEstudiante" class="form-label mb-3">Nombre</label>
                            </div>
                            <div class="col-8">
                                <input type="text" name="nomEstudiante" id="nomEstudiante"class="form-control mb-2" value ="{{$estudiante->nombre}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <label for="apeEstudiante" class="form-label mb-3">Apellido</label>
                                
                            </div>
                            <div class="col-8">
                                <input type="text" name="apeEstudiante" id="apeEstudiante" class="form-control" value ="{{$estudiante->apellido}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <label for="fechaEntrega" class="form-label mb-3">Fecha Entrega</label>
                            </div>
                            <div class="col-8">
                                <input type="date" name="fechaEntrega" id="fechaEntrega"class="form-control mb-2" value ="{{$propuesta->fecha}}">
                            </div>
                        </div>

                        <h6>Profesor</h6>
                        <div class="row">
                            <div class="col-4">
                                <label for="nomProfesor" class="form-label mb-3">Nombre</label>
                            </div>
                            <div class="col-8">
                                <input type="text" name="nomProfesor" id="nomProfesor" class="form-control mb-2">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <label for="apeProfesor" class="form-label mb-3">Apellido</label>
                            </div>
                            <div class="col-8">
                                <input type="text" name="apeProfesor" id="apeProfesor" class="form-control mb-2">
                                    
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <label for="fechaRevision" class="form-label mb-3">Fecha Revision</label>
                            </div>
                            <div class="col-8">
                                <input type="date" name="fechaRevision" id="fechaRevision" class="form-control mb-2">
                                    
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <label for="HoraRevision" class="form-label mb-3">Hora Revision</label>
                            </div>
                            <div class="col-8">
                                <input type="time" name="horaRevision" id="horaRevision" class="form-control mb-2"> 
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <label for="estado" class="form-label mb-3">Estado Propuesta</label>
                            </div>
                            <div class="col-8">
                                @if($propuesta->estado == 4)
                                    <input type="text" name="estado" id="estado" class="form-control mb-2" value = "Modificar Propuesta">   
                                
                                @endif
                                
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <label for="comentario" class="form-label mb-3">Comentario</label>
                            </div>
                            <div class="col-8">
                                <textarea name="comentario" id="comentario" class = "form-control" style = "max-width: auto;  max-height: 200px;min-height: 200px" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                        
                    </fieldset>
                                                   
                </div>
                
            </div>
        </div>
    </div>  
        
        
<div>
@endsection